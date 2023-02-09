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
    $VIP = $row['VIP'];
    $Plus = $row['Plus'];
    $Elite = $row['Elite'];
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
                                        <?php if ($type === 'USER') { ?>
                                            <option value="USER" selected>Usuario</option>
                                            <option value="ADMIN">Admin</option>
                                        <?php } else { ?>
                                            <option value="USER">Usuario</option>
                                            <option value="ADMIN" selected>Admin</option>
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
                                <label class="label-form" for="type-select">VIP</label>
                                <div class="form-control">
                                    <select name="VIP" class="selector" id="type-select">
                                        <?php if ($VIP === 'Yes') { ?>
                                            <option value="Yes" selected>Sí</option>
                                            <option value="No">No</option>
                                        <?php } else { ?>
                                            <option value="Yes">Yes</option>
                                            <option value="No" selected>No</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="invalid-feedback">
                                    <div>Seleccione una opción</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="type-select">Plus</label>
                                <div class="form-control">
                                    <select name="Plus" class="selector" id="type-select">
                                        <?php if ($Plus === 'Yes') { ?>
                                            <option value="Yes" selected>Sí</option>
                                            <option value="No">No</option>
                                        <?php } else { ?>
                                            <option value="Yes">Yes</option>
                                            <option value="No" selected>No</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="invalid-feedback">
                                    <div>Seleccione una opción</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="type-select">Elite</label>
                                <div class="form-control">
                                    <select name="Elite" class="selector" id="type-select">
                                        <?php if ($Elite === 'Yes') { ?>
                                            <option value="Yes" selected>Sí</option>
                                            <option value="No">No</option>
                                        <?php } else { ?>
                                            <option value="Yes">Yes</option>
                                            <option value="No" selected>No</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="invalid-feedback">
                                    <div>Seleccione una opción</div>
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