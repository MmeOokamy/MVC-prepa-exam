<?php include (__DIR__ . "./header.php"); ?>

<h2>Connexion :</h2>
<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
    </div>
    <input type="hidden" name="type" value="signin">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<h2>Création de Compte :</h2>
<form>
    <div class="form-group">
        <label for="exampleInputEmail2">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter email" required>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword2">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
    </div>

    <input type="hidden" name="type" value="signup">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include (__DIR__ . "./footer.php"); ?>
