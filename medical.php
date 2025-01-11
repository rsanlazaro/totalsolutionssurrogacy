<?php
include 'includes/templates/header.php';
include "includes/app.php";
if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'user' || $_SESSION['type'] === 'admin' || $_SESSION['type'] === 'admin-jr') || $_SESSION['type'] === 'donant') {
        header('location: /index.php');
    }
}

$id = $_GET['id'];
$conn = connectDB();

$sql = "SELECT * FROM donants WHERE id=${id}";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $profile = $row['profile'];
}

$sql = "SELECT * FROM demographics WHERE donant_id=${id}";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $donant_adict = $row['donant_adict'];
    $donant_alergy = $row['donant_alergy'];
    $donant_eyes = $row['donant_eyes'];
    $donant_dream = $row['donant_dream'];
    $donant_jewesh = $row['donant_jewesh'];
    $donant_autism = $row['donant_autism'];
    $donant_cancer = $row['donant_cancer'];
    $donant_cario = $row['donant_cario'];
    $donant_surgery = $row['donant_surgery'];
    $donant_congenit = $row['donant_congenit'];
    $donant_mental = $row['donant_mental'];
    $donant_diabetes = $row['donant_diabetes'];
    $donant_heart = $row['donant_heart'];
    $donant_inmune = $row['donant_inmune'];
    $donant_metabolic = $row['donant_metabolic'];
    $donant_skin = $row['donant_skin'];
    $donant_psycho = $row['donant_psycho'];
    $donant_renal = $row['donant_renal'];
    $donant_ets = $row['donant_ets'];
    $donant_esquizo = $row['donant_esquizo'];
    $donant_sx = $row['donant_sx'];
    $donant_hemo = $row['donant_hemo'];
    $donant_artery = $row['donant_artery'];
    $donant_parkinson = $row['donant_parkinson'];
    $donant_diet = $row['donant_diet'];
    $donant_cigar = $row['donant_cigar'];
    $family_adict = $row['family_adict'];
    $family_alergy = $row['family_alergy'];
    $family_eyes = $row['family_eyes'];
    $family_dream = $row['family_dream'];
    $family_jewesh = $row['family_jewesh'];
    $family_autism = $row['family_autism'];
    $family_cancer = $row['family_cancer'];
    $family_cario = $row['family_cario'];
    $family_surgery = $row['family_surgery'];
    $family_congenit = $row['family_congenit'];
    $family_mental = $row['family_mental'];
    $family_diabetes = $row['family_diabetes'];
    $family_heart = $row['family_heart'];
    $family_inmune = $row['family_inmune'];
    $family_metabolic = $row['family_metabolic'];
    $family_skin = $row['family_skin'];
    $family_psycho = $row['family_psycho'];
    $family_renal = $row['family_renal'];
    $family_ets = $row['family_ets'];
    $family_esquizo = $row['family_esquizo'];
    $family_sx = $row['family_sx'];
    $family_hemo = $row['family_hemo'];
    $family_artery = $row['family_artery'];
    $family_parkinson = $row['family_parkinson'];
    $family_diet = $row['family_diet'];
    $family_cigar = $row['family_cigar'];
    $donant_id = $row['donant_id'];
}
?>

<main class="donant-info">
    <?php if ($profile !== "Fenotipe") { ?>
        <div class="hero-img">
            <div class="img-container">
                <?php if ($profile === "Elite") { ?>
                    <img src="build/img/hero/elite.webp" alt="hero-image" />
                <?php } ?>
                <?php if ($profile === "Plus") { ?>
                    <img src="build/img/hero/plus.webp" alt="hero-image" />
                <?php } ?>
                <?php if ($profile === "VIP") { ?>
                    <img src="build/img/hero/vip.webp" alt="hero-image" />
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    <!-- <div class="donants">
        <div class="donant donant-extra">
            <div class="donant-data">
                <ul>
                    <li>Adicciones (donante): <?php if (isset($donant_adict)) {
                                                    echo $donant_adict;
                                                } ?></li>
                    <li>Alergias (donante): <?php if (isset($donant_alergy)) {
                                                echo $donant_alergy;
                                            } ?></li>
                    <li>Alteración de la vista (donante): <?php if (isset($donant_eyes)) {
                                                                echo $donant_eyes;
                                                            } ?></li>
                    <li>Alteraciones sueño (donante): <?php if (isset($donant_dream)) {
                                                            echo $donant_dream;
                                                        } ?></li>
                    <li>Alteraciones judía (donante): <?php if (isset($donant_jewesh)) {
                                                            echo $donant_jewesh;
                                                        } ?></li>
                    <li>Autismo (donante): <?php if (isset($donant_autism)) {
                                                echo $donant_autism;
                                            } ?></li>
                    <li>Cáncer (donante): <?php if (isset($donant_cancer)) {
                                                echo $donant_cancer;
                                            } ?></li>
                    <li>Cariotipo (donante): <?php if (isset($donant_cario)) {
                                                    echo $donant_cario;
                                                } ?></li>
                    <li>Cirugías (donante): <?php if (isset($donant_surgery)) {
                                                echo $donant_surgery;
                                            } ?></li>
                    <li>Defectos congénitos (donante): <?php if (isset($donant_congenit)) {
                                                            echo $donant_congenit;
                                                        } ?></li>
                    <li>Deficiencia mental (donante): <?php if (isset($donant_mental)) {
                                                            echo $donant_mental;
                                                        } ?></li>
                    <li>Diabetes (donante): <?php if (isset($donant_diabetes)) {
                                                echo $donant_diabetes;
                                            } ?></li>
                    <li>Enfermedades cardiovasculares (donante): <?php if (isset($donant_heart)) {
                                                                        echo $donant_heart;
                                                                    } ?></li>
                    <li>Enfermedades inmunológicas (donante): <?php if (isset($donant_inmune)) {
                                                                    echo $donant_inmune;
                                                                } ?></li>
                    <li>Enfermedades metabólicas (donante): <?php if (isset($donant_metabolic)) {
                                                                echo $donant_metabolic;
                                                            } ?></li>
                    <li>Enfermedades de la piel (donante): <?php if (isset($donant_skin)) {
                                                                echo $donant_skin;
                                                            } ?></li>
                    <li>Enfermedades psiquiátricas (donante): <?php if (isset($donant_psycho)) {
                                                                    echo $donant_psycho;
                                                                } ?></li>
                    <li>Enfermedades renales (donante): <?php if (isset($donant_renal)) {
                                                            echo $donant_renal;
                                                        } ?></li>
                    <li>ETS (donante): <?php if (isset($donant_ets)) {
                                            echo $donant_ets;
                                        } ?></li>
                    <li>Gen SX frágil (donante): <?php if (isset($donant_sx)) {
                                                        echo $donant_sx;
                                                    } ?></li>
                    <li>Hemofilia (donante): <?php if (isset($donant_hemo)) {
                                                    echo $donant_hemo;
                                                } ?></li>
                    <li>Hipertensión arterial (donante): <?php if (isset($donant_artery)) {
                                                                echo $donant_artery;
                                                            } ?></li>
                    <li>Parkinson (donante): <?php if (isset($donant_parkinson)) {
                                                    echo $donant_parkinson;
                                                } ?></li>
                    <li>Restricciones de la dieta (donante): <?php if (isset($donant_diet)) {
                                                                    echo $donant_diet;
                                                                } ?></li>
                    <li>Tabaquismo (donante): <?php if (isset($donant_cigar)) {
                                                    echo $donant_cigar;
                                                } ?></li>
                    <li>Adicciones (familiares): <?php if (isset($family_adict)) {
                                                        echo $family_adict;
                                                    } ?></li>
                    <li>Alergias (familiares): <?php if (isset($family_alergy)) {
                                                    echo $family_alergy;
                                                } ?></li>
                    <li>Alteración de la vista (familiares): <?php if (isset($family_eyes)) {
                                                                    echo $family_eyes;
                                                                } ?></li>
                    <li>Alteraciones sueño (familiares): <?php if (isset($family_dream)) {
                                                                echo $family_dream;
                                                            } ?></li>
                    <li>Alteraciones judía (familiares): <?php if (isset($family_jewesh)) {
                                                                echo $family_jewesh;
                                                            } ?></li>
                    <li>Autismo (familiares): <?php if (isset($family_autism)) {
                                                    echo $family_autism;
                                                } ?></li>
                    <li>Cáncer (familiares): <?php if (isset($family_cancer)) {
                                                    echo $family_cancer;
                                                } ?></li>
                    <li>Cariotipo (familiares): <?php if (isset($family_cario)) {
                                                    echo $family_cario;
                                                } ?></li>
                    <li>Cirugías (familiares): <?php if (isset($family_surgery)) {
                                                    echo $family_surgery;
                                                } ?></li>
                    <li>Defectos congénitos (familiares): <?php if (isset($family_congenit)) {
                                                                echo $family_congenit;
                                                            } ?></li>
                    <li>Deficiencia mental (familiares): <?php if (isset($family_mental)) {
                                                                echo $family_mental;
                                                            } ?></li>
                    <li>Diabetes (familiares): <?php if (isset($family_diabetes)) {
                                                    echo $family_diabetes;
                                                } ?></li>
                    <li>Enfermedades cardiovasculares (familiares): <?php if (isset($family_heart)) {
                                                                        echo $family_heart;
                                                                    } ?></li>
                    <li>Enfermedades inmunológicas (familiares): <?php if (isset($family_inmune)) {
                                                                        echo $family_inmune;
                                                                    } ?></li>
                    <li>Enfermedades metabólicas (familiares): <?php if (isset($family_metabolic)) {
                                                                    echo $family_metabolic;
                                                                } ?></li>
                    <li>Enfermedades de la piel (familiares): <?php if (isset($family_skin)) {
                                                                    echo $family_skin;
                                                                } ?></li>
                    <li>Enfermedades psiquiátricas (familiares): <?php if (isset($family_psycho)) {
                                                                        echo $family_psycho;
                                                                    } ?></li>
                    <li>Enfermedades renales (familiares): <?php if (isset($family_renal)) {
                                                                echo $family_renal;
                                                            } ?></li>
                    <li>ETS (familiares): <?php if (isset($family_ets)) {
                                                echo $family_ets;
                                            } ?></li>
                    <li>Gen SX frágil (familiares): <?php if (isset($family_sx)) {
                                                        echo $family_sx;
                                                    } ?></li>
                    <li>Hemofilia (familiares): <?php if (isset($family_hemo)) {
                                                    echo $family_hemo;
                                                } ?></li>
                    <li>Hipertensión arterial (familiares): <?php if (isset($family_artery)) {
                                                                echo $family_artery;
                                                            } ?></li>
                    <li>Parkinson (familiares): <?php if (isset($family_parkinson)) {
                                                    echo $family_parkinson;
                                                } ?></li>
                    <li>Restricciones de la dieta (familiares): <?php if (isset($family_diet)) {
                                                                    echo $family_diet;
                                                                } ?></li>
                    <li>Tabaquismo (familiares): <?php if (isset($family_cigar)) {
                                                        echo $family_cigar;
                                                    } ?></li>
                </ul>
            </div>
        </div>
        <div class="catalogue-buttons center-button">
            <div class="catalogue-button">
                <a href=<?php echo "returnCatalogo.php?id=" . $id ?>>Regresar</a>
            </div>
        </div>
    </div> -->
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
                    <th onclick="sortTable(0)">Enfermedad </th>
                    <th>Donante</th>
                    <th>Familiar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-title="Enfermedad">Addicciones</td>
                    <td data-title="Donante"><?php if (isset($donant_adict)) {
                                                    echo $donant_adict;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_adict)) {
                                                    echo $family_adict;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Alergias</td>
                    <td data-title="Donante"><?php if (isset($donant_alergy)) {
                                                    echo $donant_alergy;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_alergy)) {
                                                    echo $family_alergy;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Alteración de la vista</td>
                    <td data-title="Donante"><?php if (isset($donant_eyes)) {
                                                    echo $donant_eyes;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_eyes)) {
                                                    echo $family_eyes;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Alteraciones del sueño</td>
                    <td data-title="Donante"><?php if (isset($donant_dream)) {
                                                    echo $donant_dream;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_dream)) {
                                                    echo $family_dream;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Alteraciones judía</td>
                    <td data-title="Donante"><?php if (isset($donant_jewesh)) {
                                                    echo $donant_jewesh;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_jewesh)) {
                                                    echo $family_jewesh;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Autismo</td>
                    <td data-title="Donante"><?php if (isset($donant_autism)) {
                                                    echo $donant_autism;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_autism)) {
                                                    echo $family_autism;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Cáncer</td>
                    <td data-title="Donante"><?php if (isset($donant_cancer)) {
                                                    echo $donant_cancer;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_cancer)) {
                                                    echo $family_cancer;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Cariotipo</td>
                    <td data-title="Donante"><?php if (isset($donant_cario)) {
                                                    echo $donant_cario;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_cario)) {
                                                    echo $family_cario;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Cirugías</td>
                    <td data-title="Donante"><?php if (isset($donant_surgery)) {
                                                    echo $donant_surgery;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_surgery)) {
                                                    echo $family_surgery;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Defectos congénitos</td>
                    <td data-title="Donante"><?php if (isset($donant_congenit)) {
                                                    echo $donant_congenit;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_congenit)) {
                                                    echo $family_congenit;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Deficiencia mental</td>
                    <td data-title="Donante"><?php if (isset($donant_mental)) {
                                                    echo $donant_mental;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_mental)) {
                                                    echo $family_mental;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Diabetes</td>
                    <td data-title="Donante"><?php if (isset($donant_diabetes)) {
                                                    echo $donant_diabetes;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_diabetes)) {
                                                    echo $family_diabetes;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Enfermedades cardiovasculares</td>
                    <td data-title="Donante"><?php if (isset($donant_heart)) {
                                                    echo $donant_heart;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_heart)) {
                                                    echo $family_heart;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Enfermedades inmunológicas</td>
                    <td data-title="Donante"><?php if (isset($donant_inmune)) {
                                                    echo $donant_inmune;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_inmune)) {
                                                    echo $family_inmune;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Enfermedades metabólicas</td>
                    <td data-title="Donante"><?php if (isset($donant_metabolic)) {
                                                    echo $donant_metabolic;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_metabolic)) {
                                                    echo $family_metabolic;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Enfermedades de la piel</td>
                    <td data-title="Donante"><?php if (isset($donant_skin)) {
                                                    echo $donant_skin;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_skin)) {
                                                    echo $family_skin;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Enfermedades pisquiátricas</td>
                    <td data-title="Donante"><?php if (isset($donant_psycho)) {
                                                    echo $donant_psycho;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_psycho)) {
                                                    echo $family_psycho;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Enfermedades renales</td>
                    <td data-title="Donante"><?php if (isset($donant_renal)) {
                                                    echo $donant_renal;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_renal)) {
                                                    echo $family_renal;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">ETS</td>
                    <td data-title="Donante"><?php if (isset($donant_ets)) {
                                                    echo $donant_ets;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_ets)) {
                                                    echo $family_ets;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Gen SX frágil</td>
                    <td data-title="Donante"><?php if (isset($donant_sx)) {
                                                    echo $donant_sx;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_sx)) {
                                                    echo $family_sx;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Hemofilia</td>
                    <td data-title="Donante"><?php if (isset($donant_hemo)) {
                                                    echo $donant_hemo;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_hemo)) {
                                                    echo $family_hemo;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Hipertensión arterial</td>
                    <td data-title="Donante"><?php if (isset($donant_artery)) {
                                                    echo $donant_artery;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_artery)) {
                                                    echo $family_artery;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Parkinson</td>
                    <td data-title="Donante"><?php if (isset($donant_parkinson)) {
                                                    echo $donant_parkinson;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_parkinson)) {
                                                    echo $family_parkinson;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Restricciones de la dieta</td>
                    <td data-title="Donante"><?php if (isset($donant_diet)) {
                                                    echo $donant_diet;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_diet)) {
                                                    echo $family_diet;
                                                } ?></td>
                </tr>
                <tr>
                    <td data-title="Enfermedad">Tabaquismo</td>
                    <td data-title="Donante"><?php if (isset($donant_cigar)) {
                                                    echo $donant_cigar;
                                                } ?></td>
                    <td data-title="Familiar"><?php if (isset($family_cigar)) {
                                                    echo $family_cigar;
                                                } ?></td>
                </tr>
            </tbody>
        </table>
        <div class="return-button">
            <a href=<?php echo "returnCatalogo.php?id=" . $id ?>>Regresar</a>
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
            numberPerPage: 13, //Cantidad de datos por pagina
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
<?php include 'includes/templates/footer.php'; ?>
</body>

</html>