<?php
require ("./../model/Model.php");
require ("./../service/DatabaseAcces.php");

    if (isset($_GET['getAds'])) {
        $model = new Model();
        $data = $model->allAdsList();
        echo json_encode($data);
    }