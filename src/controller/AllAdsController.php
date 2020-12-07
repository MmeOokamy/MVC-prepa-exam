<?php


class AllAdsController
{
    private $title;
    public function __construct()
    {
        $this->title = "Liste des annonces";
    }
    function manage(){
        include (__DIR__ . "./../view/ads.php");
    }
}