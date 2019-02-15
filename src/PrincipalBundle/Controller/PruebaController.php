<?php

namespace PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PruebaController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('@Principal/Default/index.html.twig');
    }
    /**
     * @Route("/organizer", name="organizer")
     */
    public function organizerAction(){
        $array_date = getDate();
        $date=$array_date['year']."-".$array_date['mon']."-".$array_date['mday'];
		$dia = date('Y-m-d', strtotime($date));
        return $this->render('@Principal/Prueba/organizer.html.twig', array("time"=>$dia));
    }
    /**
     * @Route("/muestra", name="muestra")
     */
     public function muestraAction(){
        return $this->render('@Principal/Prueba/muestra.html.twig', array("nombre"=>"Usuario"));
    }
    /**
     * @Route("/prueba", name="prueba")
     */
     public function pruebaAction(){
        return $this->render('@Principal/Prueba/prueba.html.twig', array("nombre"=>"Usuario"));
    }
}
