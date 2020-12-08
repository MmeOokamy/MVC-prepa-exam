<?php


class Model
{
    private $handle;

    public function __construct()
    {
        $db = DatabaseAcces::getInstance();
        $this->handle = $db->getHandle();
    }

    public function addNewUser($email, $pswd)
    {

        try {
            $request = $this->handle->prepare('INSERT INTO `user`(`user_email`, `user_pswd`) VALUES (?, ?)');

            $request->execute(array(
                $email,
                $pswd
            ));
        } catch (PDOException $e) {
            var_dump('erreur lors de la requête sql :' . $e->getMessage());
        }
    }

    public function addNewAd($title, $desc, $img, $price)
    {

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
        } catch (PDOException $e) {
            var_dump('erreur lors de la requête sql :' . $e->getMessage());
            die();
        }
    }

    public function allAdsList()
    {
        try {
            //Créer une méthode dans le model permettant la récupération des annonces
            $request = $this->handle->prepare('SELECT * FROM `ads`');
            $request->execute();

            return $request->fetchAll();

        } catch (PDOException $e) {
            var_dump('erreur lors de la requête sql :' . $e->getMessage());
            die();
        }
    }

    public function singleAds(int $id)
    {
        try {
            //Créer une méthode dans le model permettant la récupération des annonces
            $request = $this->handle->prepare('SELECT * FROM `ads` WHERE `ads_id`= :id');
            $request->execute([':id' => $id]);

            return $request->fetchAll();

        } catch (PDOException $e) {
            var_dump('erreur lors de la requête sql :' . $e->getMessage());
            die();
        }
    }
}