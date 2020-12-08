<?php


class AdController
{
    private $title;
    private $model;
    private $id;

    public function __construct()
    {
        $this->title = "Détail de l'annonce";
        $this->model = new Model();
    }
    function manage(){

        $this->id = $this->model->singleAds($_GET['id']);
        include (__DIR__ . "./../view/ad.php");
    }
}