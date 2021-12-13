<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StandardController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $num1 = 1;
        $num2 = 100;
        $suma = $num1+$num2;
        return $this->render('standard/index.html.twig', 
        
        array() 
        
        [
            
            // 'controller_name' => 'Sergio Madrid',
        ]);
    }

    /**
     * @Route("/pagina2/{nombre}/", name="pagina2")
     */

    public function pagina2($nombre){
        return $this->render('standard/pagina2.html.twig',array("parametro1"=>$nombre));
    }
}
