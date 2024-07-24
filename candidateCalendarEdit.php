<?php
include 'includes/templates/header.php';
include "includes/app.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$id = $_GET['id'];
$conn = connectDB();

if (!($_SESSION['login'])) {
    header('location: /index.php');
}

$sql = "SELECT * FROM candidates WHERE id=${id}";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $form_name = $row['form_name'];
    $form_scheme = $row['form_scheme'];
}

$scheme = $form_scheme;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $extra1 = $_POST['extra1'];
    $extra2 = $_POST['extra2'];
    $extra3 = $_POST['extra3'];
    $test1 = $_POST['test1'];
    $test2 = $_POST['test2'];
    $test3 = $_POST['test3'];
    $test4 = $_POST['test4'];
    $test5 = $_POST['test5'];
    $week1 = $_POST['week1'];
    $week2 = $_POST['week2'];
    $week3 = $_POST['week3'];
    $week4 = $_POST['week4'];
    $week5 = $_POST['week5'];
    $week6 = $_POST['week6'];
    $week7 = $_POST['week7'];
    $week8 = $_POST['week8'];
    $week9 = $_POST['week9'];
    $week10 = $_POST['week10'];
    $gest1 = $_POST['gest1'];
    $gest2 = $_POST['gest2'];
    $gest3 = $_POST['gest3'];

    $query1 = "UPDATE payments SET
    extra1 = '$extra1',
    extra2 = '$extra2',
    extra3 = '$extra3',
    test1 = '$test1',
    test2 = '$test2',
    test3 = '$test3',
    test4 = '$test4',
    test5 = '$test5',
    week1 = '$week1',
    week2 = '$week2',
    week3 = '$week3',
    week4 = '$week4',
    week5 = '$week5',
    week6 = '$week6',
    week7 = '$week7',
    week8 = '$week8',
    week9 = '$week9',
    week10 = '$week10',
    gest1 = '$gest1',
    gest2 = '$gest2',
    gest3 = '$gest3'
    WHERE candidateId = $id";
    $result1   = mysqli_query($conn, $query1);
} else {
    $sql = "SELECT * FROM payments WHERE candidateId=${id}";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $extra1 = $row['extra1'];
        $extra2 = $row['extra2'];
        $extra3 = $row['extra3'];
        $test1 = $row['test1'];
        $test2 = $row['test2'];
        $test3 = $row['test3'];
        $test4 = $row['test4'];
        $test5 = $row['test5'];
        $week1 = $row['week1'];
        $week2 = $row['week2'];
        $week3 = $row['week3'];
        $week4 = $row['week4'];
        $week5 = $row['week5'];
        $week6 = $row['week6'];
        $week7 = $row['week7'];
        $week8 = $row['week8'];
        $week9 = $row['week9'];
        $week10 = $row['week10'];
        $gest1 = $row['gest1'];
        $gest2 = $row['gest2'];
        $gest3 = $row['gest3'];
    }
}

if (!($_SESSION['login'])) {
    header('location: /index.php');
}

?>

<main class="register">
    <div class="register-info">
        <h3>Calendario de pagos de <?php echo $form_name; ?></h3>
    </div>

    <?php if (isset($_GET['msg'])) { ?>

        <p class="error"><?php echo $_GET['msg']; ?></p>

    <?php } ?>

    <!-- <p>Hay un total de <?php echo $index ?> Perfiles registrados</p>
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
    </div> -->
    <form class="form-edit" action="" method="POST">
        <div class="container lab-pagination">
            <table class="responsive-table myTable table hover" id="myTable">
                <thead>
                    <tr class="thead">
                        <th>Esquema</th>
                        <th>T+Extras</th>
                        <th>Pagado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="thead">
                        <td><?php echo "$" . number_format($scheme * 1000, 2); ?></td>
                        <td><?php $totalPorPagar = (int)$extra1 + (int)$extra2 + (int)$extra3 + ((int)$scheme * 1000);
                            echo "$" . number_format($totalPorPagar, 2); ?></td>
                        <td><?php $totalPagado = (int)$extra1 + (int)$extra2 + (int)$extra3 + (int)$test1 + (int)$test2 + (int)$test3 + (int)$test4 + (int)$test5 + (int)$week1 + (int)$week2 + (int)$week3 + (int)$week4 + (int)$week5 + (int)$week6 + (int)$week7 + (int)$week8 + (int)$week9 + (int)$week10 + (int)$gest1 + (int)$gest2 + (int)$gest3;
                            echo "$" . number_format($totalPagado, 2);
                            ?></td>
                    </tr>
                </tbody>
            </table>
            <table class="responsive-table myTable table hover" id="myTable">
                <thead>
                    <tr class="thead">
                        <th>Concepto</th>
                        <th>Monto</th>
                        <th>Pagado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PGTO EXTRA - Embarazo a la Primera</td>
                        <td>$5,000.00</td>
                        <td><input type="number" name="extra1" value="<?php if (is_numeric($extra1)) {
                                                                            echo $extra1;
                                                                        } ?>"></td>
                    </tr>
                    <tr>
                        <td>PGTO EXTRA - Gemelar</td>
                        <td>$20,000.00</td>
                        <td><input type="number" name="extra2" value="<?php if (is_numeric($extra2)) {
                                                                            echo $extra2;
                                                                        } ?>"></td>
                    </tr>
                    <tr>
                        <td>PGTO EXTRA - VIH</td>
                        <td>$50,000.00</td>
                        <td><input type="number" name="extra3" value="<?php if (is_numeric($extra3)) {
                                                                            echo $extra3;
                                                                        } ?>"></td>
                    </tr>
                    <tr class="thead">
                        <td></td>
                        <td>Total de extras</td>
                        <td><?php if (is_numeric($extra1) || is_numeric($extra2) || is_numeric($extra3)) {
                                $total = (int)$extra1 + (int)$extra2 + (int)$extra3;
                                echo "$" . number_format($total, 2);
                            } else {
                                echo "$0.00";
                            } ?></td>
                    </tr>
                </tbody>
            </table>

            <table class="responsive-table myTable table hover" id="myTable">
                <thead>
                    <tr class="thead">
                        <th>Concepto</th>
                        <th>Monto</th>
                        <th>Pagado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Prueba de embarazo</td>
                        <td>$1,000.00</td>
                        <td><input type="number" name="test1" value="<?php if (is_numeric($test1)) {
                                                                            echo $test1;
                                                                        } ?>"></td>
                    </tr>
                    <tr>
                        <td>Prueba de embarazo</td>
                        <td>$1,000.00</td>
                        <td><input type="number" name="test2" value="<?php if (is_numeric($test2)) {
                                                                            echo $test2;
                                                                        } ?>"></td>
                    </tr>
                    <tr>
                        <td>Prueba de embarazo</td>
                        <td>$1,000.00</td>
                        <td><input type="number" name="test3" value="<?php if (is_numeric($test3)) {
                                                                            echo $test3;
                                                                        } ?>"></td>
                    </tr>
                    <tr>
                        <td>Prueba de embarazo</td>
                        <td>$1,000.00</td>
                        <td><input type="number" name="test4" value="<?php if (is_numeric($test4)) {
                                                                            echo $test4;
                                                                        } ?>"></td>
                    </tr>
                    <tr>
                        <td>Prueba de embarazo</td>
                        <td>$1,000.00</td>
                        <td><input type="number" name="test5" value="<?php if (is_numeric($test5)) {
                                                                            echo $test5;
                                                                        } ?>"></td>
                    </tr>
                    <tr class="thead">
                        <td></td>
                        <td>Total de pruebas de embarazo</td>
                        <td><?php if (is_numeric($test1) || is_numeric($test2) || is_numeric($test3) || is_numeric($test4) || is_numeric($test5)) {
                                $total = (int)$test1 + (int)$test2 + (int)$test3 + (int)$test4 + (int)$test5;
                                echo "$" . number_format($total, 2);
                            } else echo "$0.00" ?></td>
                    </tr>
                </tbody>
            </table>

            <table class="responsive-table myTable table hover" id="myTable">
                <thead>
                    <tr class="thead">
                        <th>Concepto</th>
                        <th>Monto</th>
                        <th>Pagado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Beta positiva</td>
                        <td>$2,000.00</td>
                        <td><input type="number" name="week1" value="<?php if (is_numeric($week1)) {
                                                                            echo $week1;
                                                                        } ?>"></td>
                    </tr>
                    <tr>
                        <td>Semana 8</td>
                        <td>$5,000.00</td>
                        <td><input type="number" name="week2" value="<?php if (is_numeric($week2)) {
                                                                            echo $week2;
                                                                        } ?>"></td>
                    </tr>
                    <tr>
                        <td>Semana 10</td>
                        <td>$5,000.00</td>
                        <td><input type="number" name="week3" value="<?php if (is_numeric($week3)) {
                                                                            echo $week3;
                                                                        } ?>"></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Semana 12</td>
                        <td>$10,000.00</td>
                        <td><input type="number" name="week4" value="<?php if (is_numeric($week4)) {
                                                                            echo $week4;
                                                                        } ?>"></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Semana 16</td>
                        <td>$15,000.00</td>
                        <td><input type="number" name="week5" value="<?php if (is_numeric($week5)) {
                                                                            echo $week5;
                                                                        } ?>"></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Semana 20</td>
                        <td>$20,000.00</td>
                        <td><input type="number" name="week6" value="<?php if (is_numeric($week6)) {
                                                                            echo $week6;
                                                                        } ?>"></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Semana 24</td>
                        <td>$20,000.00</td>
                        <td><input type="number" name="week7" value="<?php if (is_numeric($week7)) {
                                                                            echo $week7;
                                                                        } ?>"></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Semana 28</td>
                        <td>$20,000.00</td>
                        <td><input type="number" name="week8" value="<?php if (is_numeric($week8)) {
                                                                            echo $week8;
                                                                        } ?>"></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Semana 32</td>
                        <td>$24,000.00</td>
                        <td><input type="number" name="week9" value="<?php if (is_numeric($week9)) {
                                                                            echo $week9;
                                                                        } ?>"></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Semana 36</td>
                        <td>$24,000.00</td>
                        <td><input type="number" name="week10" value="<?php if (is_numeric($week10)) {
                                                                            echo $week10;
                                                                        } ?>"></td>
                        </td>
                    </tr>
                    <tr class="thead">
                        <td></td>
                        <td>Total de semanas de gestación</td>
                        <td><?php if (is_numeric($week1) || is_numeric($week2) || is_numeric($week3) || is_numeric($week4) || is_numeric($week5) || is_numeric($week6) || is_numeric($week7) || is_numeric($week8) || is_numeric($week9) || is_numeric($week10)) {
                                $total = (int)$week1 + (int)$week2 + (int)$week3 + (int)$week4 + (int)$week5 + (int)$week6 + (int)$week7 + (int)$week8 + (int)$week9 + (int)$week10;
                                echo "$" . number_format($total, 2);
                            } else {
                                echo "$0.00";
                            } ?></td>
                    </tr>
                </tbody>
            </table>

            <table class="responsive-table myTable table hover" id="myTable">
                <thead>
                    <tr class="thead">
                        <th>Concepto</th>
                        <th>Monto</th>
                        <th>Pagado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1° PGTO - Nacimiento del bebe</td>
                        <td><?php switch ($scheme) {
                                case 375:
                                    echo "$48,000.00";
                                    break;
                                case 400:
                                    echo "$50,000.00";
                                    break;
                                case 425:
                                    echo "$50,000.00";
                                    break;
                            } ?></td>
                        <td><input type="number" name="gest1" value="<?php echo $gest1; ?>"></td>
                    </tr>
                    <tr>
                        <td>2° PGTO - Cita del registro civil</td>
                        <td><?php switch ($scheme) {
                                case 375:
                                    echo "$50,000.00";
                                    break;
                                case 400:
                                    echo "$55,000.00";
                                    break;
                                case 425:
                                    echo "$70,000.00";
                                    break;
                            } ?></td>
                        <td><input type="number" name="gest2" value="<?php echo $gest2; ?>"></td>
                    </tr>
                    <tr>
                        <td>3° PGTO - Salida viaje de regreso de IPs</td>
                        <td><?php switch ($scheme) {
                                case 375:
                                    echo "$100,000.00";
                                    break;
                                case 400:
                                    echo "$120,000.00";
                                    break;
                                case 425:
                                    echo "$130,000.00";
                                    break;
                            } ?></td>
                        <td><input type="number" name="gest3" value="<?php echo $gest3; ?>"></td>
                    </tr>
                    <tr class="thead">
                        <td></td>
                        <td>Total de pagos hasta la fecha</td>
                        <td><?php if (is_numeric($gest1) || is_numeric($gest2) || is_numeric($gest3)) {
                                $total = (int)$gest1 + (int)$gest2 + (int)$gest3;
                                echo "$" . number_format($total, 2);
                            } else echo "$0.00" ?></td>
                    </tr>
                    <tr>
                        <td>Consentimiento de adopción</td>
                        <td><?php $totalRestante = $totalPorPagar - $totalPagado;
                            echo "$" . number_format($totalRestante, 2); ?></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-btn btn-arrange">
            <button class="btn btn-send" type="submit">
                <div>Finalizar</div>
            </button>
        </div>
    </form>
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

        function ActivateBtnFenotipe(i) {
            btn = document.getElementById('fenotipe-' + i);
            btn2 = document.querySelector(".btn-green" + "#fenotipe-" + i);
            btnPlus = document.getElementById('plus-' + i);
            btnElite = document.getElementById('elite-' + i);
            btnVIP = document.getElementById('vip-' + i);
            var date = new Date();
            date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
            document.cookie = "id" + "=" + i + expires + "; path=/";
            document.cookie = "type" + "=" + "Fenotipe" + expires + "; path=/";
            if (btn2 === null) {
                btn.classList.remove("btn-gray");
                btn.classList.add("btn-green");
                btnPlus.classList.remove("btn-green");
                btnPlus.classList.add("btn-gray");
                btnElite.classList.remove("btn-green");
                btnElite.classList.add("btn-gray");
                btnVIP.classList.remove("btn-green");
                btnVIP.classList.add("btn-gray");
                fetch("activateBtnFenotipe.php")
                    .then(res => res.text())
                    .then(txt => console.log(txt))
                    .catch(err => console.error(err));
                return false;
            } else {
                btn.classList.add("btn-gray");
                btn.classList.remove("btn-green");
                fetch("deactivateBtn.php")
                    .then(res => res.text())
                    .then(txt => console.log(txt))
                    .catch(err => console.error(err));
                return false;
            }
        }

        function ActivateBtnPlus(i) {
            btn = document.getElementById('plus-' + i);
            btn2 = document.querySelector(".btn-green" + "#plus-" + i);
            btnFenotipe = document.querySelector(".btn-green" + "#fenotipe-" + i);
            var date = new Date();
            date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
            document.cookie = "id" + "=" + i + expires + "; path=/";
            document.cookie = "type" + "=" + "Plus" + expires + "; path=/";
            if ((btnFenotipe === null)) {
                if (btn2 === null) {
                    btn.classList.remove("btn-gray");
                    btn.classList.add("btn-green");
                    fetch("activateBtn.php")
                        .then(res => res.text())
                        .then(txt => console.log(txt))
                        .catch(err => console.error(err));
                    return false;
                } else {
                    btn.classList.add("btn-gray");
                    btn.classList.remove("btn-green");
                    fetch("deactivateBtn.php")
                        .then(res => res.text())
                        .then(txt => console.log(txt))
                        .catch(err => console.error(err));
                    return false;
                }
            }
        }

        function ActivateBtnElite(i) {
            btn = document.getElementById('elite-' + i);
            btn2 = document.querySelector(".btn-green" + "#elite-" + i);
            btnFenotipe = document.querySelector(".btn-green" + "#fenotipe-" + i);
            var date = new Date();
            date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
            document.cookie = "id" + "=" + i + expires + "; path=/";
            document.cookie = "type" + "=" + "Elite" + expires + "; path=/";
            if ((btnFenotipe === null)) {
                if (btn2 === null) {
                    btn.classList.remove("btn-gray");
                    btn.classList.add("btn-green");
                    fetch("activateBtn.php")
                        .then(res => res.text())
                        .then(txt => console.log(txt))
                        .catch(err => console.error(err));
                    return false;
                } else {
                    btn.classList.add("btn-gray");
                    btn.classList.remove("btn-green");
                    fetch("deactivateBtn.php")
                        .then(res => res.text())
                        .then(txt => console.log(txt))
                        .catch(err => console.error(err));
                    return false;
                }
            }
        }

        function ActivateBtnVIP(i) {
            btn = document.getElementById('vip-' + i);
            btn2 = document.querySelector(".btn-green" + "#vip-" + i);
            btnFenotipe = document.querySelector(".btn-green" + "#fenotipe-" + i);
            var date = new Date();
            date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
            document.cookie = "id" + "=" + i + expires + "; path=/";
            document.cookie = "type" + "=" + "VIP" + expires + "; path=/";
            if ((btnFenotipe === null)) {
                if (btn2 === null) {
                    btn.classList.remove("btn-gray");
                    btn.classList.add("btn-green");
                    fetch("activateBtn.php")
                        .then(res => res.text())
                        .then(txt => console.log(txt))
                        .catch(err => console.error(err));
                    return false;
                } else {
                    btn.classList.add("btn-gray");
                    btn.classList.remove("btn-green");
                    fetch("deactivateBtn.php")
                        .then(res => res.text())
                        .then(txt => console.log(txt))
                        .catch(err => console.error(err));
                    return false;
                }
            }
        }
    </script>
</main>

<?php include 'includes/templates/footer.php' ?>