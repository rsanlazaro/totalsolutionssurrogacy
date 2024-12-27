<?php
include 'includes/templates/header.php';
include "includes/app.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$conn = connectDB();

if ((!($_SESSION['login'])) && (($_SESSION['type'] != 'super-admin' ))) {
    header('location: /index.php');
}
?>

<main class="register">
    <div class="register-info">
        <h3>Registro de pagos</h3>
    </div>
    <div class="esthetics-options">
        <div class="esthetics-options-grid">
            <?php if ($_SESSION['type'] == "super-admin") { ?>
                <a href="payments_candidates.php" class="esthetics-packages">
                    <div class="esthetics-options-img">
                        <img src="build/img/admin/users.webp" alt="users" />
                    </div>
                    <div class="esthetics-options-bg">
                        <div class="esthetics-title">
                            <h2>Pagos a gestantes <span></span></h2>
                        </div>
                    </div>
                </a>
                <a href="payments_assurance.php" class="esthetics-packages">
                    <div class="esthetics-options-img">
                        <img src="build/img/admin/users.webp" alt="users" />
                    </div>
                    <div class="esthetics-options-bg">
                        <div class="esthetics-title">
                            <h2>Pagos a seguros <span></span></h2>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="menu-users">
        <div class="logout">
            <a href="logout.php">
                Cerrar sesión
            </a>
        </div>
    </div>
</main>

</body>

</html>