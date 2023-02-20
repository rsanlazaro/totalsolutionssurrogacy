<?php
include 'includes/templates/header.php';
?>

<main class="home">
  <div class="hero-img">
    <div class="img-container">
      <img src="build/img/hero/home.webp" alt="hero-image" />
      <img src="build/img/hero/home2.webp" alt="hero-image" />
      <img src="build/img/hero/home3.webp" alt="hero-image" />
    </div>
    <div class="hero-text">
      <p>Donar la alegría de <span>formar una familia</span></p>
      <div class="hero-button">
        <a href="programs.php">Saber más</a>
      </div>
    </div>
  </div>
  <div class="home-info">
    <div class="img-container">
      <img src="build/img/icons/EggDonor.webp" alt="logo" />
    </div>
    <div class="home-info-text">
      <p>
        Somos una agencia de donación de óvulos dedicada a ayudarte en tu
        sueño.
      </p>
      <p>
        Nuestra pasión es ayudarte a cumplir sus sueños de tener o ayudar a
        una familia. Con más de 25 años de experiencia en agencias de
        subrogación y más de 1000 bebés nacidos, hemos visto cambiar
        innumerables vidas, e incontables vidas creadas, debido al
        desinterés de las gestantes subrogadas y las donantes de óvulos.
        Nuestra gente y nuestros programas son lo que nos hace diferentes,
        así que ya sea que desee formar su propia familia , convertirse en
        madre subrogada o en donar óvulos , estamos aquí para hacer sus
        sueños realidad.
      </p>
    </div>
    <div class="heart-container">
      <img src="build/img/icons/heartLogo.webp" alt="logo" />
    </div>
  </div>
  <div class="home-section">
    <h3>Nuestros <span>programas</span></h3>
  </div>
  <div class="home-programs">
    <div class="home-section-program-1">
      <div class="home-program-text">
        <div class="home-program-description">
          <h3>Donación de óvulos</h3>
          <p>
            Nuestro trabajo es guiar a la donante de óvulos a través del
            proceso, aliviar las preocupaciones y hacer de esta una
            experiencia placentera y satisfactoria.
          </p>
        </div>
        <div class="grid-button">
          <a href="donation.php" class="home-program-btn">Saber más</a>
        </div>
      </div>
      <div class="home-program-img">
        <img src="build/img/home/donation.webp" alt="img" />
      </div>
    </div>
    <div class="home-section-program-2">
      <div class="home-program-text">
        <div class="home-program-description">
          <h3>Selecciona tu donante</h3>
          <p>
            Encontrar un donante es una experiencia muy personal, estamos
            para ayudarte en ese proceso.
          </p>
        </div>
        <div class="grid-button">
          <a href="donantBank.php" class="home-program-btn">Saber más</a>
        </div>
      </div>
      <div class="home-program-img">
        <img src="build/img/home/donant.webp" alt="img" />
      </div>
    </div>
    <div class="home-section-program-1 home-section-program-3">
      <div class="home-program-text">
        <div class="home-program-description">
          <h3>Congelación de óvulos</h3>
          <p>
            Nuestro programa de donantes le brinda acceso a una gran
            selección de óvulos de donantes congelados.
          </p>
        </div>
        <div class="grid-button">
          <a href="freezing.php" class="home-program-btn">Saber más</a>
        </div>
      </div>
      <div class="home-program-img">
        <img src="build/img/home/freezing.webp" alt="img" />
      </div>
    </div>
  </div>
</main>

<?php
include 'includes/templates/footer.php';
?>

<!-- Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Custom JS -->
<script src="build/js/bundle.min.js"></script>
</body>

</html>