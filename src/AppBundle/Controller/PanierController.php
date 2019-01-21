<?php
namespace AppBundle\Controller;




namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Services\BeerService;

class PanierController extends Controller
{


    /**
     * @Route("/panier", name="panier")
     */
    public function panierAction(BeerService $beerService){

        return $this->render('default/panier.html.twig');
    }


}