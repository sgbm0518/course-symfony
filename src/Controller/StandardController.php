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
        $Num1 = 1;
        $Num2 = 100;
        $Suma = $Num1+$Num2;
        $nombres = "sergio, giovanni, julian, david, MAGOLA";
        return $this->render('standard/index.html.twig', 
        
            array('
            SumaEntreNumeroUnoYNumero2'=>$Suma,
            'Num1'=>$Num1,
            'Num2'=>$Num2,
            "nombres"=>$nombres
        )

    );
        
        [
            
            // 'controller_name' => 'Sergio Madrid',
        ];
    }

    /**
     * @Route("/pagina2/{nombre}/", name="pagina2")
     */

    public function pagina2($nombre){
        return $this->render('standard/pagina2.html.twig',array("parametro1"=>$nombre));
    }
}
