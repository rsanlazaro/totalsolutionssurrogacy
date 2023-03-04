<?php
include 'includes/templates/header.php';
include "includes/app.php";

if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'admin' || $_SESSION['type'] === 'admin-jr')) {
        header('location: /index.php');
    }
}

$db = new mysqli(
        $_ENV['DB_HOST'],
        $_ENV['DB_USER'],
        $_ENV['DB_PASS'] ?? '',
        $_ENV['DB_BD']);

    if(!$db) {
        echo "Error, no se pudo conectar";
        exit;
    }
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
        <h3>Perfiles registrados</h3>
    </div>

    <?php if (isset($_GET['msg'])) { ?>

        <p class="error"><?php echo $_GET['msg']; ?></p>

    <?php } ?>

    <p>Hay un total de <?php echo $index - 1 ?> Perfiles registrados</p>
    <div class="menu-users">
        <div class="create-user">
            <a href="registrationUser.php">
                Nuevo Perfil
            </a>
        </div>
        <div class="logout">
            <a href="logout.php">
                Cerrar sesión
            </a>
        </div>
    </div>

    <div class="container lab-pagination">
        <div class="panel">
            <div class="body">
                <div class="input-group">
                    <label for="searchBox">Búsqueda</label>
                    <input type="search" id="searchBox" placeholder="Filtrar..." />
                </div>
            </div>
        </div>
        <table class="responsive-table myTable table hover" id="myTable">
            <thead>
                <tr class="thead">
                    <th onclick="sortTable(0)">Usuario</th>
                    <th onclick="sortTable(1)">Password</th>
                    <th onclick="sortTable(2)">E-mail</th>
                    <th onclick="sortTable(3)">Acceso</th>
                    <!-- <th>Fenotipo</th> -->
                    <th>VIP</th>
                    <th>Plus</th>
                    <th>Elite</th>
                    <th onclick="sortTable(8)">ID fenotipo</th>
                    <th colspan="3">Donantes seleccionadas</th>
                    <?php if ($_SESSION['type'] === 'admin') { ?>
                        <th colspan="2">Acciones</th>
                    <?php } else { ?>
                        <th>Editar</th>
                    <?php } ?>
                    <th onclick="sortTable(11)">Creación</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= $index; $i++) { ?>
                    <?php if (isset($code[$i])) {
                        if (!($code[$i] === "" || $code[$i] === "-")) {
                            $idOff = $id[$i];
                            $vip[$i] = 0;
                            $plus[$i] = 0;
                            $elite[$i] = 0;
                            $query = "UPDATE users SET vip=0, plus=0, elite=0 WHERE id = ${idOff}";
                            $result = mysqli_query($conn, $query);
                        }
                    } ?>
                    <?php if (!($user[$i] == 'SaludConceptAdmin')) { ?>
                        <tr>
                            <td scope="row"><?php echo $user[$i] ?></td>
                            <td data-title="Password"><?php echo $pass[$i] ?></td>
                            <td data-title="E-mail"><?php echo $mail[$i] ?></td>
                            <td data-title="Type">
                                <?php if ($type[$i] === "user") {
                                    echo "IP";
                                } elseif ($type[$i] === "admin") {
                                    echo "Admin";
                                } else {
                                    echo "Usuario";
                                } ?>
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
                            <td data-title="ID Fenotipo"><?php if (isset($code[$i])) {
                                                                if ($code[$i] === "") {
                                                                    echo "-";
                                                                } else {
                                                                    echo $code[$i];
                                                                }
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                            <td data-title="Donante 1"><?php if (isset($donante_1[$i])) {
                                                            if ($donante_1[$i] === "") {
                                                                echo "-";
                                                            } else {
                                                                echo $donante_1[$i];
                                                            }
                                                        } else {
                                                            echo "-";
                                                        } ?></td>
                            <td data-title="Donante 2"><?php if (isset($donante_2[$i])) {
                                                            if ($donante_2[$i] === "") {
                                                                echo "-";
                                                            } else {
                                                                echo $donante_2[$i];
                                                            }
                                                        } else {
                                                            echo "-";
                                                        } ?></td>
                            <td data-title="Donante 3"><?php if (isset($donante_3[$i])) {
                                                            if ($donante_3[$i] === "") {
                                                                echo "-";
                                                            } else {
                                                                echo $donante_3[$i];
                                                            }
                                                        } else {
                                                            echo "-";
                                                        } ?></td>
                            <td>
                                <a href="user.php?id=<?php echo $id[$i]; ?>">Editar</a>
                            </td>
                            <?php if ($_SESSION['type'] === 'admin') { ?>
                                <td>
                                    <form method="POST" class="form-table" action="deleteUser.php">
                                        <input type="hidden" name="id" value="<?php echo $id[$i]; ?>">
                                        <input type="submit" onclick="return confirm('¿Deseas eliminar al usuario?')" class="boton-rojo-block" value="Eliminar">
                                    </form>
                                </td>
                            <?php } ?>
                            <td data-title="Creación"><?php echo $date[$i] ?></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script language="JavaScript" type="text/javascript">
        function checkDelete() {
            return confirm('Are you sure?');
        }
    </script>
    <!-- Custom JS -->
    <script src="build/js/bundle2.min.js"></script>
    <!-- Pagination -->
    <script>
        let options = {
            numberPerPage: 10, //Cantidad de datos por pagina
            goBar: true, //Barra donde puedes digitar el numero de la pagina al que quiere ir
            pageCounter: true, //Contador de paginas, en cual estas, de cuantas paginas
        };
        let filterOptions = {
            el: "#searchBox", //Caja de texto para filtrar, puede ser una clase o un ID
        };
        paginate.init(".myTable", options, filterOptions);
    </script>

    <script>
        function sortTable(n) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById("myTable");
            switching = true;
            //Set the sorting direction to ascending:
            dir = "asc";
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[n];
                    y = rows[i + 1].getElementsByTagName("TD")[n];
                    /*check if the two rows should switch place,
                    based on the direction, asc or desc:*/
                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            //if so, mark as a switch and break the loop:
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            //if so, mark as a switch and break the loop:
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    //Each time a switch is done, increase this count by 1:
                    switchcount++;
                } else {
                    /*If no switching has been done AND the direction is "asc",
                    set the direction to "desc" and run the while loop again.*/
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }
    </script>
</main>