<?php include (__DIR__ . "./header.php"); ?>

<h2>Mhé</h2>


 <?php foreach ( $this->adsList as $ad): ?>

    <div class="card">
        <div class="card-header">
            <?= $ad['ads_title'] ?>
        </div>
        <div class="card-body">
            <h5><?= $ad['ads_price'] ?> €</h5>
            <p><?= $ad['ads_dcs'] ?></p>
            <a href="#" class="btn btn-warning"> voir plus</a>
        </div>
    </div>

    <?php endforeach;?>

<?php include (__DIR__ . "./footer.php");?>
