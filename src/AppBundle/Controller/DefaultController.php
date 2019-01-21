<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Services\BeerService;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/login", name="login")
     */
    public function loginAction(BeerService $beerService){


        return $this->render('default/login.html.twig');
    }

    /**
     * @Route("/register", name="register")
     */
    public function registerAction(BeerService $beerService){

        return $this->render('default/register.html.twig');
    }



}
