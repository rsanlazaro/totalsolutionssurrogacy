<?php
include 'includes/templates/header.php';
include "includes/app.php";
$conn = connectDB();
?>

<main class="register">
    <div class="register-info">
        <h3>Consola de administrador</h3>
    </div>
    <div class="esthetics-options">
        <div class="esthetics-options-grid">
            <a href="gestantes.php" class="esthetics-packages">
                <div class="esthetics-options-img">
                    <img src="build/img/admin/users.webp" alt="users" />
                </div>
                <div class="esthetics-options-bg">
                    <div class="esthetics-title">
                        <h2>Gestantes<br /> <span></span></h2>
                    </div>
                </div>
            </a>
            <!-- <a href="donants.php" class="esthetics-options-treatments">
                <div class="esthetics-options-img">
                    <img src="build/img/admin/users.webp" alt="donants" />
                </div>
                <div class="esthetics-options-bg">
                    <div class="esthetics-title">
                        <h2>Donantes<br /> <span></span></h2>
                    </div>
                </div>
            </a> -->
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