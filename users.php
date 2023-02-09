<?php
include 'includes/templates/header.php';
include "includes/config/database.php";

if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'ADMIN')) {
        header('location: /index.php');
    }
}

$conn = connectDB();
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$index = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $user[++$index] = $row['username'];
    $pass[$index] = $row['password'];
    $mail[$index] = $row['email'];
    $type[$index] = $row['type'];
    $id[$index] = $row['id'];
    $VIP[$index] = $row['VIP'];
    $Plus[$index] = $row['Plus'];
    $Elite[$index] = $row['Elite'];
    $date[$index] = $row['date'];
}
?>

<main class="register">
    <div class="register-info">
        <h3>Usuarios registrados</h3>
    </div>

    <?php if (isset($_GET['msg'])) { ?>

        <p class="error"><?php echo $_GET['msg']; ?></p>

    <?php } ?>

    <div class="container">
        <table class="responsive-table">
            <caption>Hay un total de <?php echo $index - 1 ?> usuarios registrados</caption>
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Password</th>
                    <th>E-mail</th>
                    <th>Acceso</th>
                    <th>VIP</th>
                    <th>Plus</th>
                    <th>Elite</th>
                    <th colspan="2">Acciones</th>
                    <th>Creación</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= $index; $i++) { ?>
                    <?php if (!($user[$i] == 'SaludConceptAdmin')) { ?>
                        <tr>
                            <th scope="row"><?php echo $user[$i] ?></th>
                            <td data-title="Password"><?php echo $pass[$i] ?></td>
                            <td data-title="E-mail"><?php echo $mail[$i] ?></td>
                            <td data-title="Type"><?php echo $type[$i] ?></td>
                            <td data-title="VIP"><?php echo $VIP[$i] ?></td>
                            <td data-title="Plus"><?php echo $Plus[$i] ?></td>
                            <td data-title="Elite"><?php echo $Elite[$i] ?></td>
                            <td>
                                <a href="user.php?id=<?php echo $id[$i]; ?>">Editar</a>
                            </td>
                            <td>
                                <form method="POST" class="form-table" action="deleteUser.php">
                                    <input type="hidden" name="id" value="<?php echo $id[$i]; ?>">
                                    <input type="submit" onclick="return confirm('¿Deseas eliminar al usuario?')" class="boton-rojo-block" value="Eliminar">
                                </form>
                            </td>
                            <td data-title="Creación"><?php echo $date[$i] ?></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="menu-users">
        <div class="create-user">
            <a href="registrationUser.php">
                Nuevo usuario
            </a>
        </div>
        <div class="logout">
            <a href="logout.php">
                Cerrar sesión
            </a>
        </div>
    </div>
    <script language="JavaScript" type="text/javascript">
        function checkDelete() {
            return confirm('Are you sure?');
        }
    </script>
</main>