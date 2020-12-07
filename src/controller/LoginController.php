<?php


class LoginController
{
    private $title;
    private $model;

    /**
     * LoginController constructor.
     * on instancie la classe model pour appeller la method addNewUser()
     */
    public function __construct()
    {
        $this->title = "Connectez-vous =D";
        $this->model = new Model();
    }
    function manage(){

        if (isset($_POST['type'])){
            if ($_POST['type'] === 'signup' && !empty($_POST['password2']) && !empty($_POST['email2'])){
                $hashPswd = password_hash($_POST['password2'], PASSWORD_DEFAULT);
                $this->model->addNewUser($_POST['email2'], $hashPswd);
            }
        }






        include (__DIR__ . "./../view/login.php");

    }




}