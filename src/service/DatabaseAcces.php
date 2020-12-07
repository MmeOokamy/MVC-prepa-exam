<?php

/**
 * Singleton DatabaseAcces
 */
class DatabaseAcces
{
    private static $instance = null;
    private  $handle;


    public function __construct()
    {
        $host = "localhost";
        $user = "root";
        $pswd = "";
        $dbName = "le_bon_coin";

        try {

            $this->handle = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8",
                $user, $pswd,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (PDOException $e) {

            die('Échec de la connexion : ' . $e->getMessage());

        }

    }


    public static function getInstance() {

        if (is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getHandle()
    {
        return $this->handle;
    }
}