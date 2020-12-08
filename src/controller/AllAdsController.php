<?php


class AllAdsController
{
    private $title;
    private $model;
    private $adsList;

    public function __construct()
    {
        $this->title = "Liste des annonces";
        $this->model = new Model();
    }

    /**
     *
     */
    function manage(){

       $this->adsList = $this->model->allAdsList();

        include (__DIR__ . "./../view/ads.php");
    }


}