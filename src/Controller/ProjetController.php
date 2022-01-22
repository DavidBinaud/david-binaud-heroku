<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Project;
use App\Entity\Tag;

class ProjetController extends AbstractController
{
    /**
     * @Route("/projets", name="projects")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        return $this->render('project/index.html.twig', [
            'projects' => $doctrine->getRepository(Project::class)->findAll(),
            //'tags' => $this->>getDoctrine()->getRepository(Tagcs::class)->findAll()
        ]);
    }

    /**
     * @Route("/projets_tagged/{tag}", name="projects_by_tag")
     */
    public function indexTag(ManagerRegistry $doctrine, $tag): Response
    {
        return $this->render('project/index.html.twig', [
            'projects' => $doctrine->getRepository(Project::class)->findAll()
        ]);
    }

    /**
     * @Route("/projet/{id}", name="project_show")
     */
    public function show(ManagerRegistry $doctrine, int $id): Response
    {
        $projet = $doctrine->getRepository(Project::class)->find($id);
        if($projet->getCanBeSeen() && $projet->getTags()){
            var_dump("IS A GAME");
        }
        $game_tag = $doctrine->getRepository(Tag::class)->findOneBy(["name" => "GAMES"]);

        if($projet->getTags()->contains($game_tag) && $projet->getCanBeSeen()){
            $projet->setLinks(array_merge($projet->getLinks(),["Projet Jouable" => $this->generateUrl("project_show_game", ["id" => $projet->getId()])]));
        }
        return $this->render('project/show.html.twig', [
            'projet' => $projet,
            'others' => $doctrine->getRepository(Project::class)->findLastFourNotCurrent($projet->getId())
        ]);
    }

    /**
     * @Route("/projet_game/{id}", name="project_show_game")
     */
    public function showGame(ManagerRegistry $doctrine, int $id): Response
    {
        return $this->render('project/play.html.twig', [
            'projet' => $doctrine->getRepository(Project::class)->find($id),
            'others' => $doctrine->getRepository(Project::class)->findLastFourNotCurrent($id)
        ]);
    }
}
