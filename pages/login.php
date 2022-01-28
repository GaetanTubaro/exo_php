<form class="w-25 mt-5 mx-auto d-flex flex-column justify-content-center align-items- center" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="login">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <?php
    if(isset($_POST['password']) && $_POST['password'] != $pass && isset($_POST['login']) && $_POST['login'] != $log){?>
      <?php echo'<p> Indentifiant incorrect <p>'?>
    <?php ;}
  ?>
  <?php
    if(isset($_POST['login']) && $_POST['login'] === $log && isset($_POST['password']) && $_POST['password'] != $pass){?>
      <?php echo '<p> Mot de pass incorrect <p>'?>
    <?php ;}
    ?>
  <button type="submit" class="btn btn-primary m-auto">Se connecter</button>
</form>






