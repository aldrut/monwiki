<?php

namespace App\Controller;

use App\Form\ThemesFormType;
use App\Entity\Themes;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ThemesController extends AbstractController
{
    /**
     * @Route("/themes", name="themes")
     */
    // public function index(): Response
    // {
    //     return $this->render('themes/index.html.twig', [
    //         'controller_name' => 'ThemesController',
    //     ]);
    // }

/**
 * @Route("/themes/show")
 *
 * @param Environment $twig
 * @return void
 */
    public function show(Environment $twig, Request $request, EntityManagerInterface $emi)
    {
        $theme = new Themes();

        $form = $this->createForm(ThemesFormType::class,$theme);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $pwd = $form->get('name')->getData();

            dd($pwd);

            $emi->persist($theme);
            $emi->flush();

            return new Response('New theme has been uploaded in database'.$theme->getId());


        }

        return new Response($twig->render('themes/index.html.twig',[
            'themes_form' => $form->createView()
        ]));

    }
}
