<?php
/**
 * Init les controllers
 */
require 'src/controller/HomeController.php';
require 'src/controller/LoginController.php';
require 'src/controller/AllAdsController.php';
require 'src/controller/AdController.php';
require 'src/controller/NewAdController.php';
/**
 * recupéré la valeur de la super global get qui recupéré la variable page
 */
$page = filter_input(INPUT_GET, "page");

/**
 * Toutes les routes possibles avec leur controller associer
 */
$route = array(
    "home" => HomeController::class,
    "login" => LoginController::class,
    "ads" => AllAdsController::class,
    "ad" => AdController::class,
    "newAD" => NewAdController::class
);

