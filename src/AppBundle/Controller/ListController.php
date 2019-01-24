<?php


namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Services\BeerService;




class ListController extends Controller
{
    /**
     * @Route("/list", name="list")
     */
    public function listAction(BeerService $beerService){
       $beers= $beerService->getAllBeers();

        return $this->render('default/list.html.twig', ['beers'=>$beers]);
    }

}