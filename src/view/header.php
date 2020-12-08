<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/public/style/massEffect.css">
    <script src="./src/public/js/js.js"></script>
    <title><?php echo $this->title; ?></title>
</head>
<body>

<header>
    <nav class="navbar navbar-dark bg-dark">
        <div class="menu"><a href="?page=home">Home</a></div>
        <div class="menu"><a href="?page=ads">Voir les Annonces</a></div>
        <div class="menu"><a href="?page=newAD">Ajouter une Annonce</a></div>
        <div class="menu"><a href="?page=login">login</a></div>
    </nav>
</header>
<div class="container">
<h1 class="massEffect"><?php echo $this->title; ?></h1>
