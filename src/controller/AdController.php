<?php


class AdController
{
    private $title;
    public function __construct()
    {
        $this->title = "Détail de l'annonce";
    }
    function manage(){
        include (__DIR__ . "./../view/ad.php");
    }
}