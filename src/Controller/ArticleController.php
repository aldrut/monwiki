<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Commentary;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController extends AbstractController
{
    /**
     * @Route("/articles/{id}/{partialTitle}", name="article_detail")
     */
    public function index(int $id, string $partialTitle): Response
    {
        $article = $this->getDoctrine()
                        ->getRepository(Article::class)
                        ->find($id);
        if(!isset($article)){
            //redirect
            return $this->redirectToRoute('home');
        }

        return $this->render('article/index.html.twig', [
            'id' => $id,
            'article'=>$article,
        ]);
    }

   



}
