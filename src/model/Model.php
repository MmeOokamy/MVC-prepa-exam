<?php


class Model
{
    private $handle;

    public function __construct()
    {
        $db = DatabaseAcces::getInstance();
        $this->handle = $db->getHandle();
    }

    public function addNewUser($email, $pswd){

        try {
            $request = $this->handle->prepare('INSERT INTO `user`(`user_email`, `user_pswd`) VALUES (?, ?)');

            $request->execute(array(
                $email,
                $pswd
            ));
        } catch (PDOException $e){
            var_dump('erreur lors de la requête sql :' . $e->getMessage());
        }
    }
    public function addNewAd($title, $desc, $img, $price){

        try {
            $request = $this->handle->prepare('INSERT INTO `ads`(`ads_title`, `ads_dcs`,`ads_img`, `ads_price`,`id_user`,`id_category`) VALUES (?, ?, ?, ?, ?, ?)');

            $request->execute(array(
                $title,
                $desc,
                $img,
                $price,
                1,
                1
            ));
        } catch (PDOException $e){
            var_dump('erreur lors de la requête sql :' . $e->getMessage());
        }
    }
}