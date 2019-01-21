<?php
namespace AppBundle\Services;


class BeerService{

   private $beers = [
       [
           "id"=>1,
           "name"=>"Paix Dieux",
           "Brasseur"=>"brasseur Paix Dieu",
           "Description"=>"Description de la paix dieux",
           "prix"=>5,
           "volume"=>"33cl",
           "type"=>"blonde",
           "pays"=>"France"
       ],
       [
           "id"=>2,
           "name"=>"Mort Subite",
           "Brasseur"=>"brasseur Mort Subite",
           "Description"=>"Description de la Mort subite",
           "prix"=>6,
           "volume"=>"33cl",
           "type"=>"Ambrée",
           "pays"=>"Belgique"
       ],
       [
           "id"=>3,
           "name"=>"Castor",
           "Brasseur"=>"brasseur Castor",
           "Description"=>"Description de la Castor",
           "prix"=>7,
           "volume"=>"50cl",
           "type"=>"Brune",
           "pays"=>"France"
       ],
       [
           "id"=>4,
           "name"=>"Castel",
           "Brasseur"=>"brasseur Castel",
           "Description"=>"Description de la Castel",
           "prix"=>8,
           "volume"=>"75cl",
           "type"=>"blonde",
           "pays"=>"Suisse"
       ]
   ];

   private function findBeer($id){
       foreach($this->beers as $beer){
           if($beer['id']==$id){
               return $beer;
           }
       }
   }

    public function getAllBeers(){
        return $this->beers;
    }

    public function getBeerById($id){

        return $this->findBeer($id);
    }





}