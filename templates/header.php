<?php 
  require_once __DIR__. "/../lib/session.php";
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=², initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/override-bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body class="min-vh-100">
    <div class="container pb-5 mb-5">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-5 border-bottom border-white">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img height="40" src="./assets/images/logo-check-it.png">
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 link-secondary">Accueil</a></li>
        <li><a href="mes-listes.php" class="nav-link px-2">Mes listes</a></li>
        <li><a href="ajout-modification-liste.php" class="nav-link px-2">Nouvelle liste</a></li>
        <li><a href="about.php" class="nav-link px-2">À propos</a></li>
      </ul>

      <div class="col-md-3 text-end">
                <?php if (isUserConnected()) { ?>
                    <a href="logout.php" class="btn btn-outline-primary me-2">Déconnexion</a>
                <?php } else { ?>
                    <a href="login.php" class="btn btn-outline-primary me-2">Se connecter</a>
                <?php } ?>
        
      </div>
    </header>
  </div>