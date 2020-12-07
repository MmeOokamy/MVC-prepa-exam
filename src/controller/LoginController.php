<?php


class LoginController
{
    private $title;
    public function __construct()
    {
        $this->title = "Connectez-vous =D";
    }
    function manage(){
        include (__DIR__ . "./../view/login.php");

    }
}