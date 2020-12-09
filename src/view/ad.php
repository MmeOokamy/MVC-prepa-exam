<?php include (__DIR__ . "./header.php"); ?>
<!--
<?php var_dump($this->id); ?>
    <hr>
<?php var_dump($_GET); ?>
    -->


<?php foreach ( $this->id as $ad): ?>

    <div class="card">
        <div class="card-header">
           Annonces n° <?= $ad['ads_id'] ?> - <?= $ad['ads_title'] ?>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $ad['ads_price'] ?> €</h5>
            <p class="card-text"><?= $ad['ads_dcs'] ?></p>
            <img src="  <?= $ad['ads_img'] ?>" alt="<?= $ad['ads_title'] ?>">
        </div>
        <div>
            <form method="post">
               <input type="hidden" name="delete" value="<?= $ad['ads_id'] ?>">
                <button type="submit">Delete</button>
            </form>
        </div>
    </div>

<?php endforeach;?>

<?php include (__DIR__ . "./footer.php");?>