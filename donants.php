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
$sql = "SELECT * FROM donants";
$result = mysqli_query($conn, $sql);
$index = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $id[++$index] = $row['id'];
    $nationality[$index] = $row['nationality'];
    $date_birth[$index] = $row['date_birth'];
    $color_eyes[$index] = $row['color_eyes'];
    $color_skin[$index] = $row['color_skin'];
    $blood_type[$index] = $row['blood_type'];
    $height[$index] = $row['height'];
    $weight[$index] = $row['weight'];
    $education[$index] = $row['education'];
    $color_hair[$index] = $row['color_hair'];
    $type_hair[$index] = $row['type_hair'];
    $type_body[$index] = $row['type_body'];
    $ocupation[$index] = $row['ocupation'];
    $profile[$index] = $row['profile'];
    $code[$index] = $row['code'];
}

?>

<main class="register">
    <div class="register-info">
        <h3>Donantes registradas</h3>
    </div>

    <div class="container">
        <table class="responsive-table">
            <caption>Hay un total de <?php echo $index ?> donantes registradas</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nacionalidad</th>
                    <th>Año de nacimiento</th>
                    <th>Color de ojos</th>
                    <th>Color de piel</th>
                    <th>Tipo de sangre</th>
                    <th>Altura</th>
                    <th>Peso</th>
                    <th>Educación</th>
                    <th>Color de cabello</th>
                    <th>Tipo de cabello</th>
                    <th>Tipo de cuerpo</th>
                    <th>Ocupación</th>
                    <th>Perfil</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= $index; $i++) { ?>
                    <tr>
                        <th scope="row"><?php echo $code[$i] ?></th>
                        <td data-title="Nacionalidad"><?php echo $nationality[$i] ?></td>
                        <td data-title="Año de nacimiento"><?php echo $date_birth[$i] ?></td>
                        <td data-title="Color de ojos"><?php echo $color_eyes[$i] ?></td>
                        <td data-title="Color de piel"><?php echo $color_skin[$i] ?></td>
                        <td data-title="Tipo de sangre"><?php echo $blood_type[$i] ?></td>
                        <td data-title="Altura"><?php echo $height[$i] ?> m</td>
                        <td data-title="Peso"><?php echo $weight[$i] ?> kg</td>
                        <td data-title="Educación"><?php echo $education[$i] ?></td>
                        <td data-title="Color de cabello"><?php echo $color_hair[$i] ?></td>
                        <td data-title="Tipo de cabello"><?php echo $type_hair[$i] ?></td>
                        <td data-title="Tipo de cuerpo"><?php echo $type_body[$i] ?></td>
                        <td data-title="Ocupación"><?php echo $ocupation[$i] ?></td>
                        <td data-title="Perfil"><?php echo $profile[$i] ?></td>
                        <td>
                            <a href="donantEdit.php?id=<?php echo $id[$i]; ?>">Editar</a>
                        </td>
                        <td>
                            <form method="POST" class="form-table" action="deleteDonant.php">
                                <input type="hidden" name="id" value="<?php echo $id[$i]; ?>">
                                <input type="submit" onclick="return confirm('¿Deseas eliminar el registro de la donante?')" class="boton-rojo-block" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="menu-users">
        <div class="create-user">
            <a href="registrationDonant.php">
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