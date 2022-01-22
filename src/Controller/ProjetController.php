<?php

namespace App\Controller;

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
    public function index(): Response
    {
        return $this->render('project/index.html.twig', [
            'projects' => $this->getDoctrine()->getRepository(Project::class)->findAll(),
            //'tags' => $this->>getDoctrine()->getRepository(Tagcs::class)->findAll()
        ]);
    }

    /**
     * @Route("/projets_tagged/{tag}", name="projects_by_tag")
     */
    public function indexTag($tag): Response
    {
        return $this->render('project/index.html.twig', [
            'projects' => $this->getDoctrine()->getRepository(Project::class)->findAll()
        ]);
    }

    /**
     * @Route("/projet/{id}", name="project_show")
     */
    public function show(int $id): Response
    {
        $projet = $this->getDoctrine()->getRepository(Project::class)->find($id);
        if($projet->getCanBeSeen() && $projet->getTags()){
            var_dump("IS A GAME");
        }
        $game_tag = $this->getDoctrine()->getRepository(Tag::class)->findOneBy(["name" => "GAMES"]);

        if($projet->getTags()->contains($game_tag) && $projet->getCanBeSeen()){
            $projet->setLinks(array_merge($projet->getLinks(),["Projet Jouable" => $this->generateUrl("project_show_game", ["id" => $projet->getId()])]));
        }
        return $this->render('project/show.html.twig', [
            'projet' => $projet,
            'others' => $this->getDoctrine()->getRepository(Project::class)->findLastFourNotCurrent($projet->getId())
        ]);
    }

    /**
     * @Route("/projet_game/{id}", name="project_show_game")
     */
    public function showGame(int $id): Response
    {
        return $this->render('project/play.html.twig', [
            'projet' => $this->getDoctrine()->getRepository(Project::class)->find($id),
            'others' => $this->getDoctrine()->getRepository(Project::class)->findLastFourNotCurrent($id)
        ]);
    }
}
