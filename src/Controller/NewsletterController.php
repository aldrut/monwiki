<?php

namespace App\Controller;

use App\Entity\Users;
use Twig\Environment;
use App\Form\NewslettersFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class NewsletterController extends AbstractController
{
    /**
     * @Route("/newsletter", name="newsletter")
     */
    public function show(Environment $twig, Request $request, EntityManagerInterface $emi, CacheInterface $cache)
    {
        $txt = $cache->get('texte_details', function(ItemInterface $item)
        {
            //expire après 20s
            $item->expiresAfter(20);
            return $this->ralentir();

        });
        // $txt = $this->ralentir();

        $newsletter = new Users();
        $form = $this->createForm(NewslettersFormType::class,$newsletter);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $emi->persist($newsletter);
            $emi->flush();

            return new Response('New theme has been uploaded in database'.$newsletter->getId());
        }

        return new Response($twig->render('newsletter/index.html.twig',[
            'newsletter_form' => $form->createView()
        ]));

    }

    public function ralentir()
    {
        sleep(10);
        return "brouette";
    }

/**
 * Undocumented function
 *
 * @param [type] $inputs
 * @return void
 * @Route("/newsletter",name"insert_email")
 */
    // public function insertEmail($mail)
    // {
    //     $em = $this->getDoctrine()->getManager();
    //     $newsletter = new Users();
    //     $newsletter-> setMail($mail);
    //     $newsletter-> setRole(3);

    //     $em->persist($newsletter);
    //     $em->flush();
        
    //     return $this->render('newsletter/index.html.twig');


    // }

    


}
