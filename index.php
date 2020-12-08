<?php
/**
 * Init les controllers
 */
require 'src/controller/HomeController.php';
require 'src/controller/LoginController.php';
require 'src/controller/AllAdsController.php';
require 'src/controller/AdController.php';
require 'src/controller/NewAdController.php';
require 'src/controller/ErrorController.php';
require 'src/model/Model.php';
require 'src/service/DatabaseAcces.php';
/**
 * recupéré la valeur de la super global get qui recupéré la variable page
 */
$page = filter_input(INPUT_GET, "page");

/**
 * Toutes les routes possibles avec leur controller associer
 */
$route = array(
    "home"  => HomeController::class,
    "login" => LoginController::class,
    "ads"   => AllAdsController::class,
    "ad"    => AdController::class,
    "newAD" => NewAdController::class
);

/**
 * on boucle sur chaque route et quand page === routevalue
 * on instancie la view avec bon controller
 */
foreach ($route as $routeValue => $className) {

    if ($page === $routeValue) {

        $controller = new $className;
        $controller->manage();
        break;
    }
}
/**
 * si la variable controller n'existe pas dans ce cas la
 * on instancie le controller par default ( ex : erreur 404)
 */
if (empty($controller)) {
    $controller = new HomeController();
    $controller->manage();
}

/**
 * ne fonctionne pas mais c'est rigolo
 */
if (!isset($controller)){
        $controller = new ErrorController();
        $controller->manage();
}