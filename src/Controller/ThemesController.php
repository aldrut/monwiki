<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Themes;

class ThemesController extends AbstractController
{
    /**
     *  @Route("/themes/{id}/{partialTitle}", name="themes_detail")
     */
    public function index(int $id, string $partialTitle): Response
    {
        $themes = $this->getDoctrine()
                       ->getRepository(Themes::class)
                       ->find($id);
        if(!isset($themes)){
            return $this->redirectToRoute('home');
        }
        $otherThemes = $this->getDoctrine()
                            ->getRepository(Themes::class)
                            ->findAll();

        return $this->render('themes/index.html.twig', [
            'id'=>$id,
            'themes' => $themes,
            'otherThemes'=>$otherThemes,
        ]);
    }
}
