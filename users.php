<?php
include 'includes/templates/header.php';
include "includes/config/database.php";

if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'admin' || $_SESSION['type'] === 'admin-jr')) {
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
    $vip[$index] = $row['vip'];
    $plus[$index] = $row['plus'];
    $elite[$index] = $row['elite'];
    $fenotipo[$index] = $row['fenotipo'];
    $donante_1[$index] = $row['donant_1'];
    $donante_2[$index] = $row['donant_2'];
    $donante_3[$index] = $row['donant_3'];
    $code[$index] = $row['code'];
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
                    <th>Fenotipo</th>
                    <th>VIP</th>
                    <th>Plus</th>
                    <th>Elite</th>
                    <th>ID fenotipo</th>
                    <th colspan="3">Donantes seleccionadas</th>
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
                            <td data-title="Type">
                                <?php if ($type[$i] === "user") {
                                    echo "Usuario";
                                } elseif ($type[$i] === "admin") {
                                    echo "Admin";
                                } else {
                                    echo "Admin Jr";
                                } ?>
                            </td>
                            <td data-title="Fenotipo">
                                <?php
                                if ($fenotipo[$i] == "1")
                                    echo
                                    "<a href=deactivate.php?id=" . $id[$i] . "&type=fenotipo class='btn-gray'></a>";
                                else
                                    echo
                                    "<a href=activate.php?id=" . $id[$i] . "&type=fenotipo class='btn-green'></a>";
                                ?>
                            </td>
                            <td data-title="VIP">
                                <?php
                                if ($vip[$i] == "1")
                                    echo
                                    "<a href=deactivate.php?id=" . $id[$i] . "&type=vip class='btn-gray'></a>";
                                else
                                    echo
                                    "<a href=activate.php?id=" . $id[$i] . "&type=vip class='btn-green'></a>";
                                ?>
                            </td>
                            <td data-title="Plus">
                                <?php
                                if ($plus[$i] == "1")
                                    echo
                                    "<a href=deactivate.php?id=" . $id[$i] . "&type=plus class='btn-gray'></a>";
                                else
                                    echo
                                    "<a href=activate.php?id=" . $id[$i] . "&type=plus class='btn-green'></a>";
                                ?>
                            </td>
                            <td data-title="Elite">
                                <?php
                                if ($elite[$i] == "1")
                                    echo
                                    "<a href=deactivate.php?id=" . $id[$i] . "&type=elite class='btn-gray'></a>";
                                else
                                    echo
                                    "<a href=activate.php?id=" . $id[$i] . "&type=elite class='btn-green'></a>";
                                ?>
                            </td>
                            <td data-title="ID Fenotipo"><?php if(isset($code[$i])) { if ($code[$i] === "") {echo "-";} else { echo $code[$i]; } } else {echo "-";}?></td>
                            <td data-title="Donante 1"><?php if(isset($donante_1[$i])) { if ($donante_1[$i] === "") {echo "-";} else { echo $donante_1[$i]; } } else {echo "-";}?></td>
                            <td data-title="Donante 2"><?php if(isset($donante_2[$i])) { if ($donante_2[$i] === "") {echo "-";} else { echo $donante_2[$i]; } } else {echo "-";}?></td>
                            <td data-title="Donante 3"><?php if(isset($donante_3[$i])) { if ($donante_3[$i] === "") {echo "-";} else { echo $donante_3[$i]; } } else {echo "-";}?></td>
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