<?php include (__DIR__ . "./header.php"); ?>


        <form action="?page=newAD" method="post">

            <div class="form-group">
                <label for="title">Titre de l'annonce</label>
                <input class="form-control" name="title" type="text" id="title" required>

            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="img">Image de l'annonce</label>
                <input class="form-control" type="text" name="img" id="img">
            </div>

            <div class="form-group">
                <label for="price">Prix de l'annonce</label>
                <input class="form-control" type="number" step="0.1" name="price" id="price">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



<?php include (__DIR__ . "./footer.php"); ?>
