<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Themes;
use App\Entity\Article;


class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     * @Route("/", name="root")
     */
    public function index(): Response
    {
        $themes = $this->getDoctrine()
                        ->getRepository(Themes::class)
                        ->findAll();
        $articles = $this->getDoctrine()
                        ->getRepository(Article::class)
                        ->findAllPublished();
                        
        return $this->render('home/index.html.twig', [
            'themes'=>$themes,
            'articles'=>$articles,
        ]);
    }
}
