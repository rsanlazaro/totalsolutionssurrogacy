<?php
include 'includes/templates/header.php';
include "includes/app.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$conn = connectDB();

if (!($_SESSION['login'])) {
    header('location: /index.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM assurance WHERE id=${id}";
$result = mysqli_query($conn, $sql);
if (!$result->num_rows) {
    header('location: /');
}
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $assurance_name = $row['assurance_name'];
    $assurance_begin = $row['assurance_begin'];
    $assurance_payment1 = $row['assurance_payment1'];
    $assurance_payment2 = $row['assurance_payment2'];
}
?>
<main class="register">
    <div class="register-info">
        <h3>Ingresar información del seguro</h3>
    </div>
    <?php if (isset($_GET['msg'])) { ?>

        <p class="error"><?php echo $_GET['msg']; ?></p>

    <?php } ?>
    <div class="register-form new-user">
        <div class="form-body">
            <div class="contact-form">
                <h2 class="contact-form-title">Nuevo esquema de seguro</h1>
                    <form class="form" action="updateAssurance.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div class="col-md-12">
                            <label for="validationCustom01">Número de póliza</label>
                            <input type="text" class="form-control" id="validationCustom01" name="assurance_name" value=<?php echo $assurance_name ?> required />
                            <div class="invalid-feedback">
                                <div>Ingrese un número de poliza</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="validationCustomUsername">Principio de la vigencia</label>
                                <input type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="assurance_begin" value=<?php echo $assurance_begin ?> required />
                                <div class="invalid-feedback">
                                    <div>Ingrese el inicio del seguro</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="validationCustomUsername">Monto del pago inicial</label>
                                <input type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="assurance_payment1" value=<?php echo $assurance_payment1 ?> required />
                                <div class="invalid-feedback">
                                    <div>Ingrese el monto</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="validationCustomUsername">Monto de los pagos trimestrales</label>
                                <input type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="assurance_payment2" value=<?php echo $assurance_payment2 ?> required />
                                <div class="invalid-feedback">
                                    <div>Ingrese el monto</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-btn">
                            <button class="btn btn-send" type="submit">
                                <div>Guardar cambios</div>
                            </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</main>
</body>

</html>