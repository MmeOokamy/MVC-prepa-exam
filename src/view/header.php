<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/public/style/massEffect.css">
    <script src="./src/public/js/js.js"></script>
    <title><?php echo $this->title; ?></title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand massEffect text-dark" href="#">Ookamy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="?page=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="?page=ads">Voir les Annonces</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="?page=newAD">Ajouter une Annonce</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="?page=login">login</a>
                </li>
            </ul>
        </div>

    </nav>
</header>
<h1 class="massEffect"><?php echo $this->title; ?></h1>
<div class="container">


