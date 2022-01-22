<?php

namespace App\Controller;

use App\Entity\Project;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'MainController',
            'projects' => $doctrine->getRepository(Project::class)->findLastThree()
        ]);
    }

    /**
     * @Route("/cv", name="cv")
     */
    public function cv(): Response
    {
        return $this->render('cv.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('contact.html.twig');
    }
    
}
