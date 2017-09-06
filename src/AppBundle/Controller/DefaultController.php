<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name = "homepage")
     */
    public function defaultAction()
    {
        
        return $this->render('default/login.html.twig', array(
            'test' => 'test')
        );
    }
     /**
     * @Route("/register", name = "register")
     */
     public function registerAction()
     {
         
         return $this->render('default/register.html.twig', array(
             'test' => 'test')
         );
    }

}