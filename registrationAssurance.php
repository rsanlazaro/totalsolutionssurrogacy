<?php
include 'includes/templates/header.php';
include "includes/app.php";

if (!($_SESSION['login'])) {
    header('location: /index.php');
} else {
    if (!((($_SESSION['type'] == 'super-admin')) || (($_SESSION['type'] == 'admin')))) {
        header('location: /index.php');
    }
}

$conn = connectDB();

$sql = "SELECT * FROM candidates";
$result = mysqli_query($conn, $sql);
$index = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $form_name[++$index] = $row['form_name'];
    $ip[$index] = $row['ip'];
}

// When form submitted, insert values into the database.
if (isset($_REQUEST['assurance_name'])) {
    $usernameCheck = $_REQUEST['assurance_name'];
    $sql = "SELECT * FROM assurance WHERE assurance_name='${usernameCheck}'";
    $result = mysqli_query($conn, $sql);
    $repeat = $result->num_rows;
    if ($repeat > 0) {
        header("location: /registrationAssurance.php?msg=La póliza ya ha sido registrada. Por favor, ingrese otra.");
    } else {
        // removes backslashes
        $assurance_name = stripslashes($_REQUEST['assurance_name']);
        $assurance_name = mysqli_real_escape_string($conn, $assurance_name);
        $assurance_begin = stripslashes($_REQUEST['assurance_begin']);
        $assurance_begin = mysqli_real_escape_string($conn, $assurance_begin);
        $assurance_payment1 = stripslashes($_REQUEST['assurance_payment1']);
        $assurance_payment1 = mysqli_real_escape_string($conn, $assurance_payment1);
        $assurance_payment2 = stripslashes($_REQUEST['assurance_payment2']);
        $assurance_payment2 = mysqli_real_escape_string($conn, $assurance_payment2);
        $candidate = stripslashes($_REQUEST['candidate']);
        $candidate = mysqli_real_escape_string($conn, $candidate);
        $sql = "SELECT * FROM candidates WHERE form_name='${candidate}'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $candidate_id = $row['id'];
        $assurance_apply = stripslashes($_REQUEST['assurance_apply']);
        $assurance_apply = mysqli_real_escape_string($conn, $assurance_apply);
        $sql = "SELECT * FROM candidates WHERE form_name='${candidate}'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $ip = $row['ip'];
        $query    = "INSERT into `assurance` (assurance_name, assurance_begin, assurance_payment1, assurance_payment2, candidate, ip, assurance_apply, candidate_id)
                    VALUES ('$assurance_name', '$assurance_begin', '$assurance_payment1','$assurance_payment2', '$candidate', '$ip', '$assurance_apply', '$candidate_id')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            header("Location: assurance_adm.php?msg=La póliza se ha registrado exitosamente");
        } else {
            header("Location: assurance_adm.php?msg=Hubo un problema registrando la póliza. Por favor, intente nuevamente");
        }
    }
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
                    <form class="form" action="" method="post">
                        <div class="col-md-12">
                            <label for="validationCustom01">Número de póliza</label>
                            <input type="text" class="form-control" id="validationCustom01" name="assurance_name" required />
                            <div class="invalid-feedback">
                                <div>Ingrese un número de poliza</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="validationCustomUsername">Gestante</label>
                                <select class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="candidate" required>
                                    <?php foreach ($form_name as $index => $value) {
                                        $sql = "SELECT * FROM assurance WHERE candidate='${value}'";
                                        $result = mysqli_query($conn, $sql);
                                        $repeat = $result->num_rows;
                                        if ($repeat == 0) {
                                            echo '<option value="' . $value . '">' . $value . '</option>';
                                        } else {
                                            echo '<option value="' . $value . '" disabled class="grey-bg">' . $value . '</option>';
                                        }
                                    ?>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <div>Seleccione una gestante</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="validationCustomUsername">Fecha de solicitud</label>
                                <input type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="assurance_apply" required />
                                <div class="invalid-feedback">
                                    <div>Ingrese la fecha de solicitud</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="validationCustomUsername">Principio de la vigencia</label>
                                <input type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="assurance_begin" required />
                                <div class="invalid-feedback">
                                    <div>Ingrese el inicio del seguro</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="validationCustomUsername">Monto del pago inicial</label>
                                <input type="number" step="0.01" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="assurance_payment1" required />
                                <div class="invalid-feedback">
                                    <div>Ingrese el monto</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="validationCustomUsername">Monto de los pagos trimestrales</label>
                                <input type="number" step="0.01" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="assurance_payment2" required />
                                <div class="invalid-feedback">
                                    <div>Ingrese el monto</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-btn">
                            <button class="btn btn-send" type="submit">
                                <div>Registrar la póliza</div>
                            </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</main>
</body>

</html>