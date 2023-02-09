<?php
include 'includes/templates/header.php';
?>
<?php
include "includes/config/database.php";

if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'ADMIN')) {
        header('location: /index.php');
    } 
}

$conn = connectDB();
// When form submitted, insert values into the database.
if (isset($_REQUEST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($conn, $username);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    // $password = password_hash($password,PASSWORD_DEFAULT);
    $create_datetime = date("Y-m-d H:i:s");
    $query    = "INSERT into `users` (username, password, email)
                     VALUES ('$username', '" . $password . "', '$email')";
    $result   = mysqli_query($conn, $query);
    if ($result) {
        echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
    } else {
        echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
    }
} else {
?>
    <main class="register">
        <div class="hero-img">
            <div class="img-container">
                <img src="build/img/hero/register.webp" alt="hero-image" />
            </div>
        </div>
        <div class="register-info">
            <h3>Mi cuenta</h3>
            <p>
                Para poder acceder al catálogo de gestantes, es necesario crear una cuenta.
            </p>
        </div>
        <div class="register-form new-user">
            <div class="form-body">
                <div class="contact-form">
                    <h2 class="contact-form-title">Registro</h1>
                        <form class="form" action="" method="post">
                            <div class="col-md-12">
                                <label for="validationCustom01">Nombre de usuario o correo electrónico</label>
                                <input type="text" class="form-control" id="validationCustom01" name="username" placeholder="" required />
                                <div class="invalid-feedback">
                                    <div>Ingrese un nombre de usuario</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="has-validation">
                                    <label class="label-form" for="validationCustomUsername">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="email" required placeholder="" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese su correo electrónico</div>
                                    </div>
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
                            <div class="form-btn">
                                <button class="btn btn-send" type="submit">
                                    <div>Crear cuenta</div>
                                </button>
                            </div>
                        </form>
                        <div class="form-options">
                            <p>¿Ya tienes una cuenta?</p>
                            <a href="login.php">Ingresa aquí</a>
                        </div>
                </div>
            </div>
        </div>
    </main>
<?php
}
?>
</body>

</html>