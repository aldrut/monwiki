<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    
    
     #[Route('/test',name:'test')]
     public function index():Response
     {
        //TD_2.pdf
        //  return new Response(
        //      '<h1>TestController index Alexandre</h1>'
        //  );

        return $this->render('test/name.html.twig',
        [
            'className'=> get_called_class(),
            'actionName'=> 'name'

        ]);



     }



}

?>