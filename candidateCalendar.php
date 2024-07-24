<?php
include 'includes/templates/header.php';
include "includes/app.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$conn = connectDB();

if (!($_SESSION['login'])) {
    header('location: /index.php');
}

$user = $_SESSION['user'];
$sql = "SELECT * FROM candidates WHERE form_name='${user}'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $form_name = $row['form_name'];
    $form_scheme = $row['form_scheme'];
}

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

$scheme = $form_scheme;

?>

<main class="register">
    <div class="register-info">
        <h3>Registro de pagos para <?php echo $user; ?></h3>
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
                    <td><?php if (isset($extra1)) { echo "$" . number_format($extra1, 2); }?></td>
                </tr>
                <tr>
                    <td>PGTO EXTRA - Gemelar</td>
                    <td>$20,000.00</td>
                    <td><?php if (isset($extra2)) { echo "$" . number_format($extra2, 2); }?></td>
                </tr>
                <tr>
                    <td>PGTO EXTRA - VIH</td>
                    <td>$50,000.00</td>
                    <td><?php if (isset($extra3)) { echo "$" . number_format($extra3, 2); }?></td>
                </tr>
                <tr class="thead">
                    <td></td>
                    <td>Total de extras</td>
                    <td><?php if(isset($extra1) && isset($extra2) && isset($extra3)) { echo "$" . number_format($extra1+$extra2+$extra3, 2); } else echo "$0.00"?></td>
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
                    <td><?php if(isset($test1)) { echo "$" . number_format($test1, 2); }?></td>
                </tr>
                <tr>
                    <td>Prueba de embarazo</td>
                    <td>$1,000.00</td>
                    <td><?php if(isset($test2)) { echo "$" . number_format($test2, 2); }?></td>
                </tr>
                <tr>
                    <td>Prueba de embarazo</td>
                    <td>$1,000.00</td>
                    <td><?php if(isset($test3)) { echo "$" . number_format($test3, 2); }?></td>
                </tr>
                <tr>
                    <td>Prueba de embarazo</td>
                    <td>$1,000.00</td>
                    <td><?php if(isset($test4)) { echo "$" . number_format($test4, 2); }?></td>
                </tr>
                <tr>
                    <td>Prueba de embarazo</td>
                    <td>$1,000.00</td>
                    <td><?php if(isset($test5)) { echo "$" . number_format($test5, 2); }?></td>
                </tr>
                <tr class="thead">
                    <td></td>
                    <td>Total de pruebas de embarazo</td>
                    <td><?php if(isset($test1) && isset($test2) && isset($test3) && isset($test4) && isset($test5)) { echo "$" . number_format($test1+$test2+$test3+$test4+$test5, 2); } else { echo "$0.00"; }?></td>
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
                    <td><?php if(isset($week1)) { echo "$" . number_format($week1, 2);}?></td>
                </tr>
                <tr>
                    <td>Semana 8</td>
                    <td>$5,000.00</td>
                    <td><?php if(isset($week2)) { echo "$" . number_format($week2, 2);}?></td>
                </tr>
                <tr>
                    <td>Semana 10</td>
                    <td>$5,000.00</td>
                    <td><?php if(isset($week3)) { echo "$" . number_format($week3, 2);}?></td>
                </tr>
                <tr>
                    <td>Semana 12</td>
                    <td>$10,000.00</td>
                    <td><?php if(isset($week4)) { echo "$" . number_format($week4, 2);}?></td>
                </tr>
                <tr>
                    <td>Semana 16</td>
                    <td>$15,000.00</td>
                    <td><?php if(isset($week5)) { echo "$" . number_format($week5, 2);}?></td>
                </tr>
                <tr>
                    <td>Semana 20</td>
                    <td>$20,000.00</td>
                    <td><?php if(isset($week6)) { echo "$" . number_format($week6, 2);}?></td>
                </tr>
                <tr>
                    <td>Semana 24</td>
                    <td>$20,000.00</td>
                    <td><?php if(isset($week7)) { echo "$" . number_format($week7, 2);}?></td>
                </tr>
                <tr>
                    <td>Semana 28</td>
                    <td>$20,000.00</td>
                    <td><?php if(isset($week8)) { echo "$" . number_format($week8, 2);}?></td>
                </tr>
                <tr>
                    <td>Semana 32</td>
                    <td>$24,000.00</td>
                    <td><?php if(isset($week9)) { echo "$" . number_format($week9, 2);}?></td>
                </tr>
                <tr>
                    <td>Semana 36</td>
                    <td>$24,000.00</td>
                    <td><?php if(isset($week10)) { echo "$" . number_format($week10, 2);}?></td>
                </tr>
                <tr class="thead">
                    <td></td>
                    <td>Total de semanas de gestación</td>
                    <td><?php if (isset($week1) && isset($week2) && isset($week3) && isset($week4) && isset($week5) && isset($week6) && isset($week7) && isset($week8) && isset($week9) && isset($week10)) { echo "$" . number_format($week1+$week2+$week3+$week4+$week5+$week6+$week7+$week8+$week9+$week10, 2); } else {echo "$0.00"; }?></td>
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
                    <td><?php if (isset($gest1)) { echo "$" . number_format($gest1, 2); }?></td>
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
                    <td><?php if (isset($gest2)) { echo "$" . number_format($gest2, 2); }?></td>
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
                    <td><?php if (isset($gest3)) { echo "$" . number_format($gest3, 2); }?></td>
                </tr>
                <tr class="thead">
                    <td></td>
                    <td>Total de pagos hasta la fecha</td>
                    <td>
                    <?php if(isset($gest1) && isset($gest2) && isset($gest3)) { echo "$" . number_format($gest1+$gest2+$gest3, 2); } else { echo "$0.00"; }?>
                    </td>
                </tr>
                <tr>
                    <td>Consentimiento de adopción</td>
                    <td><?php $totalRestante = $totalPorPagar - $totalPagado;
                            echo "$" . number_format($totalRestante, 2); ?></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div class="menu-users">
        <div class="logout">
            <a href="logout.php">
                Cerrar sesión
            </a>
        </div>
    </div>
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