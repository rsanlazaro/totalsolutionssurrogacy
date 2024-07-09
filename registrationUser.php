<?php
include 'includes/templates/header.php';
include "includes/app.php";

if (!($_SESSION['login'])) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'admin')) {
        header('location: /index.php');
    }
}

$conn = connectDB();


// When form submitted, insert values into the database.
if (isset($_REQUEST['username'])) {
    $usernameCheck = $_REQUEST['username'];
    $sql = "SELECT * FROM users WHERE username='${usernameCheck}'";
    $result = mysqli_query($conn, $sql);
    $repeat = $result->num_rows;
    if ($repeat > 0) {
        header("location: /registrationUser.php?msg=El nombre de usuario ya ha sido registrado. Por favor, seleccione otro.");
    } else {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        // $password = password_hash($password, PASSWORD_DEFAULT);
        $type = stripslashes($_REQUEST['type']);
        $type = mysqli_real_escape_string($conn, $type);
        $query    = "INSERT into `users` (username, password, profile)
                    VALUES ('$username', '$password', '$type')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            header("Location: users_adm.php?msg=El usuario se ha creado exitosamente");
        } else {
            header("Location: users_adm.php?msg=Hubo un problema registrando al usuario. Por favor, intente nuevamente");
        }
    }
}
?>
<main class="register">
    <div class="register-info">
        <h3>Ingresar información de usuario</h3>
    </div>
    <?php if (isset($_GET['msg'])) { ?>

        <p class="error"><?php echo $_GET['msg']; ?></p>

    <?php } ?>
    <div class="register-form new-user">
        <div class="form-body">
            <div class="contact-form">
                <h2 class="contact-form-title">Nuevo usuario</h1>
                    <form class="form" action="" method="post">
                        <div class="col-md-12">
                            <label for="validationCustom01">Nombre de usuario</label>
                            <input type="text" class="form-control" id="validationCustom01" name="username" required />
                            <div class="invalid-feedback">
                                <div>Ingrese un nombre de usuario</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="validationCustomUsername">Contraseña</label>
                                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="password" required />
                                <div class="invalid-feedback">
                                    <div>Ingrese su contraseña</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="type-select">Tipo de usuario</label>
                                <div class="form-control">
                                    <select name="type" class="selector" id="type-select">
                                        <option value="user">Reclutadora</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                                <div class="invalid-feedback">
                                    <div>Seleccione un tipo de usuario</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-btn">
                            <button class="btn btn-send" type="submit">
                                <div>Crear usuario</div>
                            </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</main>
</body>

</html>