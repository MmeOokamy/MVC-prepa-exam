<?php


class ErrorController
{
    private $title;
    public function __construct()
    {
        $this->title = "Too bad :(";
    }
    function manage(){

        include (__DIR__ . "./../view/404.php");

    }
}