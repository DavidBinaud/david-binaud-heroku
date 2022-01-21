<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Project;

class ProjetController extends AbstractController
{
    /**
     * @Route("/projets", name="projects")
     */
    public function index(): Response
    {
        return $this->render('project/index.html.twig', [
            'controller_name' => 'ProjetController',
            //'projets' => $this->getDoctrine()->getRepository(Project::class)->findAll()
        ]);
    }

    /**
     * @Route("/projet/{id}", name="project_show")
     */
    public function show(int $id): Response
    {
        return $this->render('project/how.html.twig', [
            'controller_name' => 'ProjetController',
            //'projet' => $this->getDoctrine()->getRepository(Project::class)->find($id)
        ]);
    }
}
