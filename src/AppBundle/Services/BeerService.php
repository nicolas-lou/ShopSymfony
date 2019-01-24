<?php
namespace AppBundle\Services;
use Unirest;


class BeerService{



   private function findBeer($id){
       foreach($this->beers as $beer){
           if($beer['id']==$id){
               return $beer;
           }
       }
   }

    public function getAllBeers(){
        $url = 'http://localhost:8000/beers';

        $beers = Unirest\Request::get($url);
        return $beers->body;
    }

    public function getBeerById($id){
        $url = 'http://localhost:8000/app_dev.php/getbeer/'.$id;
        $beer = Unirest\Request::get($url);
        return $beer->body;

    }





}