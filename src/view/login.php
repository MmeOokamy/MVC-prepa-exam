<?php include (__DIR__ . "./header.php"); ?>
<div>
    <h2>Connexion :</h2>
        <form action="?page=login" method="post">
            <div class="form-group">
                <label for="email1">Email</label>
                <input type="email" name="email" class="form-control" id="email1" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="password1">Password</label>
                <input type="password" name="password1" class="form-control" id="password1" placeholder="Password" required>
            </div>
            <input type="hidden" name="type" value="signin">

            <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
</div>
<div>
    <h2>Création de Compte :</h2>
        <form action="?page=login" method="post">
            <div class="form-group">
                <label for="email2">Email</label>
                <input type="email" name="email2" class="form-control" id="email2" placeholder="Enter email" required>
            </div>

            <div class="form-group">
                <label for="password2">Password</label>
                <input type="password" name="password2" class="form-control" id="password2" placeholder="Password" required>
            </div>

            <input type="hidden" name="type" value="signup">

            <button type="submit" class="btn btn-primary">Créer un Compte</button>
        </form>
</div>

<?php include (__DIR__ . "./footer.php"); ?>
