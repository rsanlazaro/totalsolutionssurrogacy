<?php

use function PHPUnit\Framework\isNull;

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
$id = $_GET['id'];
$months = ['ene','feb','mar','abr','may','jun','jul','ago','sep','oct','nov','dic'];

$sql = "SELECT * FROM candidates WHERE id = $id";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $form_name = $row['form_name'];
    $ip = $row['ip'];
}

$sql = "SELECT * FROM assurance WHERE candidate_id = $id";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $assurance_name = $row['assurance_name'];
    $assurance_payment1 = number_format($row['assurance_payment1'],2);
    $assurance_payment2 = number_format($row['assurance_payment2'],2);
    $payment_1 = $row['payment_1'];
    $payment_2 = $row['payment_2'];
    $payment_3 = $row['payment_3'];
    $payment_4 = $row['payment_4'];
}
?>
<main class="register">
    <div class="register-info">
        <h3>Histórico de pagos para la gestante <?php echo $form_name; ?> </h3>
    </div>
    <?php if (isset($_GET['msg'])) { ?>

        <p class="error"><?php echo $_GET['msg']; ?></p>

    <?php } ?>
    <div class="register-form new-user">
        <div class="form-body">
            <div class="contact-form">
                <form class="form" action="" method="post">
                    <div class="col-md-12">
                        <label for="validationCustom01">Gestante</label>
                        <input type="text" id="candidate" class="form-control" id="validationCustom01" name="candidate" value="<?php echo $form_name; ?>" disabled />
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom01">IP</label>
                        <input type="text" id="ip" class="form-control" id="validationCustom01" name="assurance_ip" value="<?php echo $ip; ?>" disabled />
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom01">Primer pago (Monto: $<?php echo $assurance_payment1; ?>) registrado el:</label>
                        <input type="text" id="payment_1" class="form-control" id="validationCustom01" name="payment_1" value="<?php echo $payment_1 == null ? $payment_1 : substr($payment_1,8,2) . "/" . $months[(int)substr($payment_1,5,2)-1] . "/" . substr($payment_1,2,2) . " " . substr($payment_1,11);  ?>" disabled />
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom01">Segundo pago (Monto: $<?php echo $assurance_payment2; ?>) registrado el:</label>
                        <input type="text" id="payment_2" class="form-control" id="validationCustom01" name="payment_2" value="<?php echo $payment_2 == null ? $payment_2 : substr($payment_2,8,2) . "/" . $months[(int)substr($payment_2,5,2)-1] . "/" . substr($payment_2,2,2) . " " . substr($payment_2,11); ?>" disabled />
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom01">Tercer pago (Monto: $<?php echo $assurance_payment2; ?>) registrado el:</label>
                        <input type="text" id="payment_3" class="form-control" id="validationCustom01" name="payment_3" value="<?php echo $payment_3 == null ? $payment_3 : substr($payment_3,8,2) . "/" . $months[(int)substr($payment_3,5,2)-1] . "/" . substr($payment_3,2,2) . " " . substr($payment_3,11); ?>" disabled />
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom01">Cuarto pago (Monto: $<?php echo $assurance_payment2; ?>) registrado el:</label>
                        <input type="text" id="payment_4" class="form-control" id="validationCustom01" name="payment_4" value="<?php echo $payment_4 == null ? $payment_4 :  substr($payment_4,8,2) . "/" . $months[(int)substr($payment_4,5,2)-1] . "/" . substr($payment_4,2,2) . " " . substr($payment_4,11); ?>" disabled />
                    </div>
                    <div class="form-btn">
                        <a href="payments_assurance.php" class="btn btn-send">
                            <div>Regresar</div>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
</body>

</html>