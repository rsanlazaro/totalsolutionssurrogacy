<?php
include 'includes/templates/header.php';
include "includes/app.php";

if (!($_SESSION['login'])) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'admin' || $_SESSION['type'] === 'admin-jr')) {
        header('location: /index.php');
    } 
}

$id = $_GET['id'];
$conn = connectDB();
$sql = "SELECT * FROM users WHERE id=${id}";
$result = mysqli_query($conn, $sql);
if (!$result->num_rows) {
    header('location: /');
}
while ($row = mysqli_fetch_assoc($result)) {
    $user = $row['username'];
    $pass = $row['password'];
    $mail = $row['email'];
    $type = $row['type'];
    $donant_1 = $row['donant_1'];
    $donant_2 = $row['donant_2'];
    $donant_3 = $row['donant_3'];
    $code = $row['code'];
}
?>
<main class="register">
    <div class="register-info">
        <h3>Editar información de usuario</h3>
    </div>
    <div class="register-form new-user">
        <div class="form-body">
            <div class="contact-form">
                <h2 class="contact-form-title">Usuario <?php echo $id ?></h1>
                    <form class="form" action="updateUser.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div class="col-md-12">
                            <label for="validationCustom01">Nombre de usuario</label>
                            <input type="text" class="form-control" id="validationCustom01" name="user" value="<?php echo $user ?>" required />
                            <div class="invalid-feedback">
                                <div>Ingrese un nombre de usuario</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="validationCustomUsername">Correo electrónico</label>
                                <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="mail" required value="<?php echo $mail ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese su correo electrónico</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="validationCustomUsername">Contraseña</label>
                                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="pass" required value="<?php echo $pass ?>" />
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
                                        <?php if ($type === 'user') { ?>
                                            <option value="user" selected>Usuario</option>
                                            <option value="donant">Donante</option>
                                            <option value="admin">Admin</option>
                                            <option value="admin-jr">Admin Jr</option>
                                        <?php } elseif ($type === 'donant') { ?>
                                            <option value="user">Usuario</option>
                                            <option value="donant" selected>Donante</option>
                                            <option value="admin">Admin</option>
                                            <option value="admin-jr">Admin Jr</option>
                                        <?php } elseif ($type === 'admin') { ?>
                                            <option value="user">Usuario</option>
                                            <option value="donant">Donante</option>
                                            <option value="admin" selected>Admin</option>
                                            <option value="admin-jr">Admin Jr</option>
                                        <?php } else { ?>
                                            <option value="user">Usuario</option>
                                            <option value="donant">Donante</option>
                                            <option value="admin">Admin</option>
                                            <option value="admin-jr" selected>Admin Jr</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="invalid-feedback">
                                    <div>Seleccione un tipo de usuario</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="validationCustomUsername">Donante 1:</label>
                                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="donant_1" value="<?php echo $donant_1 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese la donante 1</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="validationCustomUsername">Donante 2:</label>
                                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="donant_2" value="<?php echo $donant_2 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese la donante 2</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="validationCustomUsername">Donante 3:</label>
                                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="donant_3" value="<?php echo $donant_3 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese la donante 3</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="validationCustomUsername">ID de fenotipo</label>
                                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="code" value="<?php echo $code ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese el ID del fenotipo</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-btn">
                            <button class="btn btn-send" type="submit">
                                <div>Actualizar datos</div>
                            </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</main>
</body>

</html>