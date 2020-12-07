<?php


class NewAdController
{
    private $title;
    public function __construct()
    {
        $this->title = "Ajouter une annonce";
    }

    function manage(){
        include (__DIR__ . "./../view/newAd.php");
    }
}