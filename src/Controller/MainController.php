<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/cv", name="cv")
     */
    public function cv(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/projects", name="projects")
     */
    public function projects(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'MainController',
            'route' => 'projets'
        ]);
    }
}
