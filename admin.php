<?php
include 'includes/templates/header.php';
include "includes/app.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$conn = connectDB();

if ((!($_SESSION['login'])) && (($_SESSION['type'] != 'super-admin' ) || ($_SESSION['type'] != 'admin' ))) {
    header('location: /index.php');
}
?>

<main class="register">
    <div class="register-info">
        <h3>Consola de administrador</h3>
    </div>
    <div class="esthetics-options">
        <div class="esthetics-options-grid">
            <?php if ($_SESSION['type'] == "super-admin") { ?>
                <a href="users_adm.php" class="esthetics-packages">
                    <div class="esthetics-options-img">
                        <img src="build/img/admin/users.webp" alt="users" />
                    </div>
                    <div class="esthetics-options-bg">
                        <div class="esthetics-title">
                            <h2>Usuarios<br /> <span></span></h2>
                        </div>
                    </div>
                </a>
            <?php } ?>
            <a href="profile_adm.php" class="esthetics-options-treatments">
                <div class="esthetics-options-img">
                    <img src="build/img/admin/users.webp" alt="donants" />
                </div>
                <div class="esthetics-options-bg">
                    <div class="esthetics-title">
                        <h2>Candidatas<br /> <span></span></h2>
                    </div>
                </div>
            </a>
            <a href="assurance_adm.php" class="esthetics-options-treatments">
                <div class="esthetics-options-img">
                    <img src="build/img/admin/users.webp" alt="donants" />
                </div>
                <div class="esthetics-options-bg">
                    <div class="esthetics-title">
                        <h2>Seguros<br /> <span></span></h2>
                    </div>
                </div>
            </a>
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