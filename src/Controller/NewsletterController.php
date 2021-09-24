<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsletterController extends AbstractController
{
    /**
     * @Route("/newsletter", name="newsletter")
     */
    public function index(): Response
    {
        return $this->render('newsletter/index.html.twig', [
            'controller_name' => 'NewsletterController',
        ]);
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
