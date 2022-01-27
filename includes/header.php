<?php
    require_once 'includes/variables.php';
    require_once 'includes/function.php';
    session_start();
    if(isset($_POST['login'])){
    $_SESSION['login'] = $_POST['login']; 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Bonnetton</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="list.php">Liste des produits</a>
        </li>
        <li class="nav-item">
          <?php if(isset($_SESSION['login'])){?>
            <a class="nav-link"><?=$_SESSION['login']?></a>
        </li>    
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Déconnexion</a>
        </li>
          <?php } else { ?>
            <a class="nav-link" href="login.php">Connexion</a>
          <?php } ?>
        </li>
        <li class="nav-item">
        </li>
      </ul>
    </div>
  </div>  
</nav> 