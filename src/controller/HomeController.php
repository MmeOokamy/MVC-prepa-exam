<?php


class HomeController
{
    private $title;
    public function __construct()
    {
        $this->title = "Bienvenue sur le Bon Coin";
    }
    function manage(){
        include (__DIR__ . "./../view/home.php");

    }
}