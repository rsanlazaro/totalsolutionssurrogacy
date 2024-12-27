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
    // $ip[$index] = $row['ip'];
    $idCandidates[$index] = $row['id'];
}

$sql = "SELECT * FROM assurance";
$result = mysqli_query($conn, $sql);
$index = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $assurance_name[++$index] = $row['assurance_name'];
    $assurance_payment1[$index] = $row['assurance_payment1'];
    $assurance_payment2[$index] = $row['assurance_payment2'];
    $candidate[$index] = $row['candidate'];
    $ip[$index] = $row['ip'];
    $payment_1[$index] = $row['payment_1'];
    $payment_2[$index] = $row['payment_2'];
    $payment_3[$index] = $row['payment_3'];
    $payment_4[$index] = $row['payment_4'];
    $candidate_id[$index] = $row['candidate_id'];
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
        $assurance_apply = stripslashes($_REQUEST['assurance_apply']);
        $assurance_apply = mysqli_real_escape_string($conn, $assurance_apply);
        $sql = "SELECT * FROM candidates WHERE form_name='${candidate}'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $ip = $row['ip'];
        $query    = "INSERT into `assurance` (assurance_name, assurance_begin, assurance_payment1, assurance_payment2, candidate, ip, assurance_apply)
                    VALUES ('$assurance_name', '$assurance_begin', '$assurance_payment1','$assurance_payment2', '$candidate', '$ip', '$assurance_apply')";
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
        <h3>Ingrese la información del pago</h3>
    </div>
    <?php if (isset($_GET['msg'])) { ?>

        <p class="error"><?php echo $_GET['msg']; ?></p>

    <?php } ?>
    <div class="register-form new-user">
        <div class="form-body">
            <div class="contact-form">
                <h2 class="contact-form-title">Pago del seguro</h1>
                    <form class="form" action="" method="post">
                        <div class="col-md-12">
                            <div class="has-validation">
                                <label class="label-form" for="validationCustomUsername">Gestante</label>
                                <select class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="candidate" onchange="updateValue(this)" required>
                                    <?php foreach ($form_name as $index => $value) {
                                        echo '<option value="' . $idCandidates[$index] . '">' . $value . '</option>';
                                    ?>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <div>Seleccione una gestante</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom01">Número de póliza</label>
                            <input type="text" id="assurance_name" class="form-control" id="validationCustom01" name="assurance_name" disabled />
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom01">IP</label>
                            <input type="text" id="ip" class="form-control" id="validationCustom01" name="assurance_ip" disabled />
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom01">Siguiente pago programado</label>
                            <input type="text" id="assurance_date" class="form-control" id="validationCustom01" name="assurance_date" disabled />
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom01">Monto</label>
                            <input type="text" id="assurance_amount" class="form-control" id="validationCustom01" name="assurance_amount" disabled />
                        </div>
                        <div class="form-btn">
                            <button class="btn btn-send" type="submit">
                                <div>Registrar el pago</div>
                            </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</main>
<script>
    // JavaScript function to update input value
    function updateValue(selectElement) {
        var selectedValue = selectElement.value;
        var jsArray = <?php echo json_encode($candidate_id); ?>;
        var assuranceId = parseInt(Object.keys(jsArray).filter(key => jsArray[key] === selectedValue));
        if (isNaN(assuranceId)) {
            assuranceName = 'No hay póliza registrada para esta gestante';
            ip = 'No hay póliza registrada para esta gestante';
            paymentMsg = 'No hay póliza registrada para esta gestante';
            paymentAmount = 'No hay póliza registrada para esta gestante';
        } else {
            var jsAssuranceName = <?php echo json_encode($assurance_name); ?>;
            var assuranceName = jsAssuranceName[assuranceId];
            var jsAssuranceIp = <?php echo json_encode($ip); ?>;
            var ip = jsAssuranceIp[assuranceId];
            var jsPayment1 = <?php echo json_encode($payment_1); ?>;
            var payment1 = jsPayment1[assuranceId];
            var jsPayment2 = <?php echo json_encode($payment_2); ?>;
            var payment2 = jsPayment2[assuranceId];
            var jsPayment3 = <?php echo json_encode($payment_3); ?>;
            var payment3 = jsPayment3[assuranceId];
            var jsPayment4 = <?php echo json_encode($payment_4); ?>;
            var payment4 = jsPayment4[assuranceId];
            var jsAmount1 = <?php echo json_encode($assurance_payment1); ?>;
            var amount1 = jsAmount1[assuranceId];
            var jsAmount2 = <?php echo json_encode($assurance_payment2); ?>;
            var amount2 = jsAmount2[assuranceId];
            if (payment1 === null || payment1 === undefined) {
                paymentMsg = 'Falta el primer pago';
                paymentAmount = amount1;
            } else {
                paymentAmount = amount2;
                if (payment2 === null || payment2 === undefined) {
                    paymentMsg = 'Falta el segundo pago';
                } else {
                    if (payment3 === null || payment3 === undefined) {
                        paymentMsg = 'Falta el tercer pago';
                    } else {
                        if (payment4 === null || payment4 === undefined) {
                            paymentMsg = 'Falta el cuarto pago';
                        }
                    }
                }
            }
        }
        var assuranceNameDisplay = document.getElementById('assurance_name');
        assuranceNameDisplay.value = assuranceName;
        var ipDisplay = document.getElementById('ip');
        ipDisplay.value = ip;
        var dateDisplay = document.getElementById('assurance_date');
        dateDisplay.value = paymentMsg;
        var amountDisplay = document.getElementById('assurance_amount');
        amountDisplay.value = paymentAmount;
    }
</script>
</body>

</html>