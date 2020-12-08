<?php


class NewAdController
{
    private $title;
    private $model;
    public function __construct()
    {
        $this->title = "Ajouter une annonce";
        $this->model = new Model();
    }

    function manage(){

        if(isset($_POST['title']) && !empty($_POST['title'])){

            $this->model->addNewAd($_POST['title'], $_POST['desc'], $_POST['img'], $_POST['price']);
        }

        include (__DIR__ . "./../view/newAd.php");
    }
}