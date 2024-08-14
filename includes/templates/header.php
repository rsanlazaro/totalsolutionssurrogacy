<!DOCTYPE html>
<html lang="es">

<head>
  <!-- <link rel="icon" href="build/img/logo/icon.png" /> -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Primary Meta Tags -->
  <title>TotalSolutionsSurrogacy</title>
  <meta name="title" content="TotalSolutionsSurrogacy" />
  <meta name="description" content="TotalSolutionsSurrogacy" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- Leaflet -->
  <!-- Font awesome -->
  <!-- Style -->
  <link rel="stylesheet" href="build/css/app.css" />
</head>

<body>
  <header>
    <!-- <div class="background-image">
      <img src="build/img/home/background.webp" alt="background-image">
    </div> -->
    <div class="header-top">
      <div class="header-phone">
        <div class="img-container">
          <img src="build/img/icons/phoneWhite.webp" alt="phone" />
        </div>
        <p>55 6127 1008</p>
      </div>
      <div class="header-social-media">
        <a href="https://www.facebook.com/" class="img-container facebook">
          <img src="build/img/icons/facebookWhite.webp" alt="facebook" />
        </a>
        <a href="mailto:recepcion@saludconcept.mx" class="img-container mail">
          <img src="build/img/icons/mailWhite.webp" alt="mail" />
        </a>
      </div>
    </div>
    <div class="header-middle">
      <div class="img-container">
        <a href="\"><img src="build/img/icons/TotalSolutionSurrogacy.webp" alt="logo" /></a>
      </div>
    </div>
    <nav class="navbar navbar-expand-md">
      <div class="navbar-nav header-bottom">
        <div class="navbar">
          <li class="nav-item">
            <a class="nav-link" href="/">
              <p>Inicio</p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <p>Blog</p>
            </a>
            <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="donation.php">Categoría 1</a>
              </li> -->
            <!-- <li>
                <a class="dropdown-item" href="donantBank.php">Selecciona tu donante</a>
              </li>
              <li>
                <a class="dropdown-item" href="freezing.php">Congelación de óvulos</a>
              </li> -->
            <!-- </ul> -->
          </li>
          <?php

          if (session_status() == PHP_SESSION_NONE) {
            session_start();
          }
          if (!(isset($_SESSION['type']))) { ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">
                <p>Acceder</p>
              </a>
            </li>
            <?php } else {
            if ($_SESSION['type'] == "admin" || $_SESSION['type'] == "super-admin") { ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="admin.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <p>Administrador</p>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <?php if ($_SESSION['type'] == "super-admin") { ?>
                    <li>
                      <a class="dropdown-item" href="users_adm.php">Usuarios</a>
                    </li>
                  <?php } ?>
                  <li>
                    <a class="dropdown-item" href="profile_adm.php">Candidatas</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="assurance_adm.php">Seguros</a>
                  </li>
                </ul>
              </li>
            <?php } else if ($_SESSION['type'] == "user") { ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="recruiter.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <p>Reclutadora</p>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li>
                    <a class="dropdown-item" href="form.php">Nueva Candidata</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="profile_candidates.php">Candidatas</a>
                  </li>
                </ul>
              </li>
            <?php } ?>
          <?php } ?>
        </div>
      </div>
    </nav>
  </header>