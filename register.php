<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="icon" href="build/img/logo/icon.png" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Primary Meta Tags -->
  <title>EggDonor</title>
  <meta name="title" content="EggDonor" />
  <meta name="description" content="EggDonor" />
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
    <div class="background-image">
      <img src="build/img/home/background.webp" alt="background-image">
    </div>
    <div class="header-top">
      <div class="header-phone">
        <div class="img-container">
          <img src="build/img/icons/phone.webp" alt="phone" />
        </div>
        <p>55 5922 3371</p>
      </div>
      <div class="header-social-media">
        <a href="facebook.com" class="img-container facebook">
          <img src="build/img/icons/facebook.webp" alt="facebook" />
        </a>
        <a href="instagram.com" class="img-container instagram">
          <img src="build/img/icons/instagram.webp" alt="instagram" />
        </a>
        <a href="mailto:recepcion@saludconcept.mx" class="img-container mail">
          <img src="build/img/icons/mail.webp" alt="mail" />
        </a>
      </div>
    </div>
    <div class="header-middle">
      <div class="img-container">
        <a href="\"><img src="build/img/icons/EggDonorWhite.webp" alt="logo" /></a>
      </div>
    </div>
    <nav class="navbar">
      <div class="header-bottom">
        <div class="navbar">
          <a href="\" class="navbar-element">
            <p>Nosotros</p>
          </a>
          <a href="/programs.php" class="navbar-element">
            <p>Programas</p>
          </a>
          <a href="/register.php" class="navbar-element">
            <p>Registro</p>
          </a>
        </div>
      </div>
    </nav>
  </header>

  <main class="register">
    <div class="hero-img">
      <div class="img-container">
        <img src="build/img/hero/register.webp" alt="hero-image" />
      </div>
    </div>
    <div class="register-info">
      <h3>Mi cuenta</h3>
      <p>
        Para poder acceder al catálogo de gestantes, es necesario crear una
        cuenta.
      </p>
    </div>
    <div class="register-form">
      <div class="form-body">
        <div class="contact-form">
          <h2 class="contact-form-title">Acceder</h2>
          <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

          <?php } ?>
          <form action="login.php" method="POST" class="needs-validation" novalidate>
            <div class="col-md-12">
              <label for="validationCustom01">Nombre de usuario o correo electrónico</label>
              <input type="text" class="form-control" id="validationCustom01" name="user" placeholder="" required />
              <div class="invalid-feedback">
                <div>Ingrese un nombre de usuario</div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="has-validation">
                <label class="label-form" for="validationCustomUsername">Contraseña</label>
                <input type="password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="password" required placeholder="" />
                <div class="invalid-feedback">
                  <div>Ingrese su contraseña</div>
                </div>
              </div>
            </div>

            <div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" />
                <label class="form-check-label" for="invalidCheck">
                  <p>Recuérdame</p>
                </label>
              </div>
            </div>
            <input type="hidden" name="_next" value="https://www.mpetsa.com/thanks.php" />
            <input type="hidden" name="_subject" value="Solicitud de informes" />
            <div class="form-btn">
              <button class="btn btn-send" type="submit">
                <div>Agendar</div>
              </button>
            </div>
          </form>
          <div class="form-options">
            <a href="#">¿Olvidaste la contraseña?</a>
            <a href="#">Crear cuenta</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <div class="footer-grid">
      <div class="footer-1">
        <div class="form-info">
          <div class="img-container">
            <img src="build/img/icons/scheduleWhite.webp" alt="time" />
          </div>
          <div class="info-text">
            <p>
              Lunes-Sábado: 9:00 a 18:00 hrs <br />
              Domingo: Cerrado
            </p>
          </div>
        </div>
        <div class="form-info">
          <div class="img-container">
            <img src="build/img/icons/mailWhite.webp" alt="mail" />
          </div>
          <div class="info-text">
            <a href="mailto:elcorreoquequieres@correo.com">recepcion@saludconcept.mx</a>
          </div>
        </div>
        <div class="form-info">
          <div class="img-container">
            <img src="build/img/icons/whatsappWhite.webp" alt="whatsapp" />
          </div>
          <div class="info-text">
            <a href="https://wa.me/525559037194?">+52 55 5903 7194</a>
          </div>
        </div>
      </div>
      <div class="footer-2">
        <div class="form-info">
          <div class="img-container">
            <img src="build/img/icons/phoneWhite.webp" alt="phone" />
          </div>
          <div class="info-text">
            <a href="tel:55-5922-3371">55 5922 3371</a>
          </div>
        </div>
        <div class="form-info">
          <div class="img-container">
            <img src="build/img/icons/mapsWhite.webp" alt="location" />
          </div>
          <div class="info-text">
            <a href="https://www.google.com/maps/place/C.+Concepci%C3%B3n+Beistegui+720,+Col+del+Valle+Centro,+Benito+Ju%C3%A1rez,+03100+Ciudad+de+M%C3%A9xico,+CDMX/data=!4m2!3m1!1s0x85d1ff7d3fd37cc5:0x3999909446943457?sa=X&ved=2ahUKEwjD96n1hPj7AhVAlmoFHaoVCvAQ8gF6BAgUEAE">C. Concepción Beistegui 720, <br />
              Col. del Valle Nte. Benito Juárez <br />
              03100, CDMX.</a>
          </div>
        </div>
      </div>
      <div class="footer-3">
        <div class="form-info-social-networks">
          <div class="form-social-text">
            <p>Síguenos en</p>
          </div>
          <div class="form-social-icons">
            <div class="img-container">
              <img src="build/img/icons/instagramWhite.webp" alt="instagram" />
            </div>
            <div class="img-container">
              <img src="build/img/icons/facebook2White.webp" alt="facebook" />
            </div>
            <div class="img-container">
              <img src="build/img/icons/whatsappWhite.webp" alt="whatsapp" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Boostrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Custom JS -->
  <script src="build/js/bundle.min.js"></script>
</body>

</html>