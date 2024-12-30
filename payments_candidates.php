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

$sql = "SELECT * FROM candidates";
$result = mysqli_query($conn, $sql);
$index = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $assurance_name[++$index] = $row['assurance_name'];
    $assurance_payment1[$index] = $row['assurance_payment1'];
    $assurance_payment2[$index] = $row['assurance_payment2'];
    $assurance_begin[$index] = $row['assurance_begin'];
    $candidate[$index] = $row['candidate'];
    $ip[$index] = $row['ip'];
    $payment_1[$index] = $row['payment_1'];
    $payment_2[$index] = $row['payment_2'];
    $payment_3[$index] = $row['payment_3'];
    $payment_4[$index] = $row['payment_4'];
    $candidate_id[$index] = $row['candidate_id'];
}

// When form submitted, insert values into the database.
if (isset($_REQUEST['candidate'])) {
    $payment_number = stripslashes($_REQUEST['payment_number']);
    $today = new DateTime();
    $todayString = $today->format('Y-m-d H:i:s');
    $candidate = stripslashes($_REQUEST['candidate']); 
    switch ($payment_number) {
        case 1:
            $sql = "UPDATE assurance SET payment_1='$todayString' WHERE candidate_id='${candidate}'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: admin_payments.php?msg=El pago se ha registrado exitosamente");
            } else {
                header("Location: admin_payments.php?msg=Hubo un problema registrando el pago. Por favor, intente nuevamente");
            }
            break;
        case 2:
            $sql = "UPDATE assurance SET payment_2='$todayString' WHERE candidate_id='${candidate}'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: admin_payments.php?msg=El pago se ha registrado exitosamente");
            } else {
                header("Location: admin_payments.php?msg=Hubo un problema registrando el pago. Por favor, intente nuevamente");
            }
            break;
        case 3:
            $sql = "UPDATE assurance SET payment_3='$todayString' WHERE candidate_id='${candidate}'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: admin_payments.php?msg=El pago se ha registrado exitosamente");
            } else {
                header("Location: admin_payments.php?msg=Hubo un problema registrando el pago. Por favor, intente nuevamente");
            }
            break;
        case 4:
            $sql = "UPDATE assurance SET payment_4='$todayString' WHERE candidate_id='${candidate}'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: admin_payments.php?msg=El pago se ha registrado exitosamente");
            } else {
                header("Location: admin_payments.php?msg=Hubo un problema registrando el pago. Por favor, intente nuevamente");
            }
            break;
        default:
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
                <h2 class="contact-form-title">Pago de la gestante</h1>
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
                            <label for="validationCustom01">Inicio de vigencia</label>
                            <input type="text" id="assurance_begin" class="form-control" id="validationCustom01" name="assurance_begin" disabled />
                        </div>
                        <input type="hidden" id="payment_number" name="payment_number" value="1" />
                        <div class="col-md-12">
                            <label id="assurance_date_label" for="validationCustom01">Siguiente pago programado</label>
                            <input type="text" id="assurance_date" class="form-control" id="validationCustom01" name="assurance_date" disabled />
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom01">Monto</label>
                            <input type="text" id="assurance_amount" class="form-control" id="validationCustom01" name="assurance_amount" disabled />
                        </div>
                        <div class="form-btn">
                            <button class="btn btn-send" id="submitBtn" type="submit" disabled>
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
        var label = document.getElementById('assurance_date_label');
        if (isNaN(assuranceId)) {
            assuranceName = 'No hay póliza registrada para esta gestante';
            ip = 'No hay póliza registrada para esta gestante';
            assuranceBegin = 'No hay póliza registrada para esta gestante';
            paymentMsg = 'No hay póliza registrada para esta gestante';
            paymentAmount = 'No hay póliza registrada para esta gestante';
            label.textContent = "Fecha del siguiente pago programado";
            document.getElementById('submitBtn').disabled = true;
        } else {
            document.getElementById('submitBtn').disabled = false;
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
            var jsAssuranceBegin = <?php echo json_encode($assurance_begin); ?>;
            var assuranceBegin = jsAssuranceBegin[assuranceId].split(' ')[0];
            let assuranceBeginDate = new Date(assuranceBegin); // Convert to Date object
            let assuranceBeginDateTwo = new Date(assuranceBegin); // Convert to Date object
            let assuranceBeginDateThree = new Date(assuranceBegin); // Convert to Date object
            let assuranceBeginDateFour = new Date(assuranceBegin); // Convert to Date object
            assuranceBeginDate.setMonth(assuranceBeginDate.getMonth() + 1); // Add 3 months
            assuranceBeginDateTwo.setMonth(assuranceBeginDateTwo.getMonth() + 3); // Add 6 months
            assuranceBeginDateThree.setMonth(assuranceBeginDateThree.getMonth() + 6); // Add 9 months
            assuranceBeginDateFour.setMonth(assuranceBeginDateFour.getMonth() + 9); // Add 12 months
            let assuranceBeginDateNewDate = assuranceBeginDate.toISOString().split("T")[0]; // Format as YYYY-MM-DD
            let assuranceBeginDateNewDateTwo = assuranceBeginDateTwo.toISOString().split("T")[0]; // Format as YYYY-MM-DD
            let assuranceBeginDateNewDateThree = assuranceBeginDateThree.toISOString().split("T")[0]; // Format as YYYY-MM-DD
            let assuranceBeginDateNewDateFour = assuranceBeginDateFour.toISOString().split("T")[0]; // Format as YYYY-MM-DD
            if (payment1 === null || payment1 === undefined) {
                paymentMsg = assuranceBeginDateNewDate;
                paymentAmount = amount1;
                label.textContent = "El primer pago será el:";
                payment_number = 1;
            } else {
                paymentAmount = amount2;
                if (payment2 === null || payment2 === undefined) {
                    paymentMsg = assuranceBeginDateNewDateTwo;
                    label.textContent = "El segundo pago será el:";
                    payment_number = 2;
                } else {
                    if (payment3 === null || payment3 === undefined) {
                        paymentMsg = assuranceBeginDateNewDateThree;
                        label.textContent = "El tercer pago será el:";
                        payment_number = 3;
                    } else {
                        if (payment4 === null || payment4 === undefined) {
                            paymentMsg = assuranceBeginDateNewDateFour;
                            label.textContent = "El cuarto pago será el:";
                            payment_number = 4;
                        } else {
                            paymentMsg = 'No hay más pagos programados';
                            label.textContent = 'No hay más pagos programados';
                            paymentAmount = 0;
                        }
                    }
                }
            }
        }
        var assuranceNameDisplay = document.getElementById('assurance_name');
        assuranceNameDisplay.value = assuranceName;
        var ipDisplay = document.getElementById('ip');
        ipDisplay.value = ip;
        var dateBegin = document.getElementById('assurance_begin');
        dateBegin.value = assuranceBegin;
        var dateDisplay = document.getElementById('assurance_date');
        dateDisplay.value = paymentMsg;
        var amountDisplay = document.getElementById('assurance_amount');
        amountDisplay.value = paymentAmount;
        var paymentNumber = document.getElementById('payment_number');
        paymentNumber.value = payment_number;
    }
</script>
</body>

</html>