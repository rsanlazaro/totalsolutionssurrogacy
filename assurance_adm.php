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

$sql = "SELECT * FROM assurance";
$result = mysqli_query($conn, $sql);
$index = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $id[++$index] = $row['id'];
    $assurance_name[$index] = $row['assurance_name'];
    $assurance_begin[$index] = $row['assurance_begin'];
    $assurance_payment1[$index] = $row['assurance_payment1'];
    $assurance_payment2[$index] = $row['assurance_payment2'];
}

$spanishMonths = array(
    1 => 'enero',
    2 => 'febrero',
    3 => 'marzo',
    4 => 'abril',
    5 => 'mayo',
    6 => 'junio',
    7 => 'julio',
    8 => 'agosto',
    9 => 'septiembre',
    10 => 'octubre',
    11 => 'noviembre',
    12 => 'diciembre'
);

$day_today = date('d');
$month_todayNmbr = date('n');
$month_today = $spanishMonths[$month_todayNmbr];
$year_today = date('Y');
$date_today = new DateTime();

?>

<main class="register">
    <div class="register-info">
        <h3>Pólizas registradas</h3>
    </div>

    <?php if (isset($_GET['msg'])) { ?>

        <p class="error"><?php echo $_GET['msg']; ?></p>

    <?php } ?>

    <p>Hay un total de <?php echo $index ?> pólizas registradas</p>
    <p>Fecha de hoy: <br><?php echo $day_today . " de " . $month_today . " del " . $year_today; ?></p>
    <div class="menu-users">
        <div class="create-user">
            <a href="registrationAssurance.php">
                Nuevo registro de seguro
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
                    <th onclick="sortTable(0)">Póliza</th>
                    <th onclick="sortTable(1)">Inicio de vigencia</th>
                    <th onclick="sortTable(2)">Pagos realizados</th>
                    <th onclick="sortTable(3)">Siguiente pago</th>
                    <th onclick="sortTable(4)">Monto a pagar</th>
                    <th onclick="sortTable(5)">Días restantes para el pago</th>
                    <th onclick="sortTable(6)">Vigencia activa</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= $index; $i++) {
                    $day = date('d', strtotime($assurance_begin[$i]));
                    $monthNmbr = date('n', strtotime($assurance_begin[$i]));
                    $year = date('Y', strtotime($assurance_begin[$i]));
                    $month = $spanishMonths[$monthNmbr];
                    $first_payment_monthNmbr = date('n', strtotime($assurance_begin[$i])) + 1;
                    $first_year = $year;
                    $second_year = $year;
                    $third_year = $year;
                    $fourth_year = $year;
                    $payment_today = $assurance_payment1[$i];
                    if ($first_payment_monthNmbr > 12) {
                        $first_payment_monthNmbr = $first_payment_monthNmbr - 12;
                        $first_year = $first_year + 1;
                    }
                    $second_payment_monthNmbr = date('n', strtotime($assurance_begin[$i])) + 3;
                    if ($second_payment_monthNmbr > 12) {
                        $second_payment_monthNmbr = $second_payment_monthNmbr - 12;
                        $second_year = $second_year + 1;
                    }
                    $third_payment_monthNmbr = date('n', strtotime($assurance_begin[$i])) + 6;
                    if ($third_payment_monthNmbr > 12) {
                        $third_payment_monthNmbr = $third_payment_monthNmbr - 12;
                        $third_year = $third_year + 1;
                    }
                    $fourth_payment_monthNmbr = date('n', strtotime($assurance_begin[$i])) + 9;
                    if ($fourth_payment_monthNmbr > 12) {
                        $fourth_payment_monthNmbr = $fourth_payment_monthNmbr - 12;
                        $fourth_year = $fourth_year + 1;
                    }
                    $first_payment_month = $spanishMonths[$first_payment_monthNmbr];
                    $second_payment_month = $spanishMonths[$second_payment_monthNmbr];
                    $third_payment_month = $spanishMonths[$third_payment_monthNmbr];
                    $fourth_payment_month = $spanishMonths[$fourth_payment_monthNmbr];
                    $date_target = new DateTime();
                    $date_target->setDate($first_year, $first_payment_monthNmbr, $day);
                    $interval = $date_today->diff($date_target);
                    $period = "0/4";
                    $daysLeft = $interval->days;
                    $payment_month = $first_payment_month;
                    if (($interval->invert == 1) && ($interval->days > 0)) {
                        $date_target = new DateTime();
                        $date_target->setDate($second_year, $second_payment_monthNmbr, $day);
                        $interval = $date_today->diff($date_target);
                        $payment_today = $assurance_payment2[$i];
                        $period = "1/4";
                        $daysLeft = $interval->days;
                        $payment_month = $second_payment_month;
                        if (($interval->invert == 1) && ($interval->days > 0)) {
                            $date_target = new DateTime();
                            $date_target->setDate($third_year, $third_payment_monthNmbr, $day);
                            $interval = $date_today->diff($date_target);
                            $period = "2/4";
                            $daysLeft = $interval->days;
                            $payment_month = $third_payment_month;
                        }
                        if (($interval->invert == 1) && ($interval->days > 0)) {
                            $date_target = new DateTime();
                            $date_target->setDate($fourth_year, $fourth_payment_monthNmbr, $day);
                            $interval = $date_today->diff($date_target);
                            $period = "3/4";
                            $daysLeft = $interval->days;
                            $payment_month = $fourth_payment_month;
                        }
                        if (($interval->invert == 1) && ($interval->days > 0)) {
                            $date_target = new DateTime();
                            $date_target->setDate($fourth_year, $fourth_payment_monthNmbr, $day);
                            $interval = $date_today->diff($date_target);
                            $period = "4/4";
                            $payment_today = "Pagos completos";
                            $interval->days = 0;
                            $daysLeft = "-";
                            $payment_month = "-";
                        }
                    }
                    $date_target = new DateTime();
                    $date_target->setDate($year, $monthNmbr, $day);
                    $interval = $date_today->diff($date_target);
                    $monthsDifference = ($interval->y * 12) + $interval->m;
                ?>
                    <tr>
                        <td data-title="Nombre de póliza" scope="row"><?php echo $assurance_name[$i] ?></td>
                        <td data-title="Inicio de vigencia"><?php echo $day . " de " . $month . " del " . $year; ?></td>
                        <td data-title="Pagos realizados"><?php echo $period; ?></td>
                        <td data-title="Siguiente pago"><?php if (($payment_month == "-")) { echo $payment_month; } else { echo $day . " de " . $payment_month . " del " . $year; } ?></td>
                        <td data-title="Monto a pagar"><?php if (is_numeric($payment_today)) { echo "$" . number_format($payment_today, 2); } else { echo $payment_today;} ?></td>
                        <td data-title="Días restantes"><?php echo $daysLeft; ?></td>
                        <td data-title="Vigencia activa"><?php if (($monthsDifference) >= 10) {
                                                                echo "Sí";
                                                            } else {
                                                                echo "No";
                                                            } ?></td>
                        <td>
                            <a href="assurance.php?id=<?php echo $id[$i]; ?>">Editar</a>
                        </td>
                        <td>
                            <form method="POST" class="form-table" action="deleteAssurance.php">
                                <input type="hidden" name="id" value="<?php echo $id[$i]; ?>">
                                <input type="hidden" name="user" value="<?php echo $assurance_name[$i]; ?>">
                                <input type="submit" onclick="return confirm('¿Deseas eliminar la póliza?')" class="boton-rojo-block" value="Eliminar">
                            </form>
                        </td>
                    </tr>
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