<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Services\BeerService;


class DetailController extends Controller
{
    /**
     * @Route("/detail/{id}", name="detail", requirements={"id"="\d+"})
     */
    public function detailAction(BeerService $beerService, $id){
    $beer = $beerService->getBeerById($id);

        return $this->render('default/detail.html.twig', ['beer'=>$beer]);
    }




}
