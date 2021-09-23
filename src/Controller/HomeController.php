<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Themes;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        $themes = $this->getDoctrine()
                        ->getRepository(Themes::class)
                        ->findAll();
        return $this->render('home/index.html.twig', [
            'themes'=>$themes,
        ]);
    }
}
