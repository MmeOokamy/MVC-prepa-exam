<?php include (__DIR__ . "./header.php"); ?>

<h2>Mhé</h2>

<?php echo '<div id="btnRefresh"> <button style="padding: 3px 10px; border-radius: 4px; margin-bottom: 2em; background-color: #a52a2a; width: fit-content; color: #ffff; ">Rafraichir</button></div>'; ?>
<hr>
<?php echo '<div id="listAds"> '; ?>
<div class="card-deck">
 <?php foreach ( $this->adsList as $ad): ?>


        <div class="card" style="width: 18rem;">
            <div class="card-header">
                <?= $ad['ads_title'] ?>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $ad['ads_price'] ?> €</h5>
                <p class="card-text"><?= $ad['ads_dcs'] ?></p>
                <a href="?page=ad&id=<?= $ad['ads_id'] ?>" class="btn btn-warning"> voir plus</a>
            </div>
        </div>



    <?php endforeach;?>
</div>
<?php echo '</div>';?>

<?php include (__DIR__ . "./footer.php");?>
