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
?>

<main class="register">
    <div class="register-info">
        <h3>Registro de IPs</h3>
    </div>

    <div class="tab-content mt-3" id="myTabContent">
        <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="register-tab">
            <div class="container lab-pagination">
                <div id="table-scroll" class="content table-responsive table-full-width">
                    <table class="table table-hover myTable" id="myTable">
                        <thead class="table-light" data-bs-toggle="collapse" data-bs-target="#section1" aria-expanded="true" style="cursor: pointer;">
                            <tr class="thead">
                                <th colspan="13">Fase 1 - Crio Embrio</th>
                            </tr>
                        </thead>
                        <tbody id="section1" class="collapse show">
                            <tr class="thead">
                                <th>Crio Embrio</th>
                                <th>Info</th>
                                <th>Estado</th>
                                <th>Underway</th>
                                <th colspan="2">Info</th>
                                <th>Uploading</th>
                                <th>Habilitar</th>
                                <th>Uploading</th>
                                <th>Habilitar</th>
                                <th>Uploading</th>
                                <th>Habilitar</th>
                                <th>Habilitar Vista</th>
                            </tr>
                            <tr>
                                <td>Reporte de creación embrionaria <br>Rapport de création embryonnaire</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="processing">
                                            Processing
                                        </option>
                                        <option value="concluding">
                                            Concluding
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(1,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_1" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_1" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(2,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_2" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_2" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(3,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_3" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_3" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Reporte PGTA <br> Rapport PGT-A </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="esperando">
                                            Esperando
                                        </option>
                                        <option value="enviado">
                                            Enviado
                                        </option>
                                        <option value="processing">
                                            Processing
                                        </option>
                                        <option value="concluding">
                                            Concluding
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(4,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_4" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_4" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(5,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_5" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_5" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(6,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_6" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_6" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                        </tbody>
                        <thead class="table-light" data-bs-toggle="collapse" data-bs-target="#section2" aria-expanded="true" style="cursor: pointer;">
                            <tr class="thead">
                                <th colspan="13">Fase 2.1 - Intentos de embarazo</th>
                            </tr>
                        </thead>
                        <tbody id="section2" class="collapse show">
                            <tr class="thead">
                                <th>Preparación Endometrial > Transferencia</th>
                                <th>Descripción</th>
                                <th>Resultado</th>
                                <th>Underway</th>
                                <th colspan="2">Datos</th>
                                <th>Uploading</th>
                                <th>Habilitar</th>
                                <th>Uploading</th>
                                <th>Habilitar</th>
                                <th>Uploading</th>
                                <th>Habilitar</th>
                                <th>Habilitar Vista</th>
                            </tr>
                            <tr>
                                <td>Presentación de candidata <br> Présentation de la candidate</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="selection">
                                            Selection
                                        </option>
                                        <option value="insurancePeriod">
                                            Insurance Period
                                        </option>
                                        <option value="startStimulation">
                                            Start Stimulation
                                        </option>
                                        <option value="Canceled">
                                            Canceled
                                        </option>
                                        <option value="Concluding">
                                            Concluding
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(7,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_7" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_7" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(8,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_8" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_8" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(9,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_9" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_9" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Transfer embrionaria <br> Transfert embryonnaire</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="canceled">
                                            Canceled
                                        </option>
                                        <option value="underway">
                                            Underway
                                        </option>
                                        <option value="concluding">
                                            Concluding
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(10,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_10" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_10" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(11,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_11" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_11" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(12,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_12" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_12" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Reporte Transfer <br> Rapport de transfert embryonnaire</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="esperando">
                                            Esperando
                                        </option>
                                        <option value="concluding">
                                            Concluding
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(13,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_13" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_13" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(14,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_14" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_14" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(15,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_15" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_15" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Prueba Beta <br> Bêta Test</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="esperando">
                                            Esperando
                                        </option>
                                        <option value="concluding">
                                            Concluding
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(16,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_16" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_16" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(17,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_17" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_17" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(18,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_18" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_18" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Saco Gestacional <br> Sac gestationnel</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="conPresencia">
                                            Con Presencia
                                        </option>
                                        <option value="sinPresencia">
                                            Sin Presencia
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(19,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_19" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_19" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(20,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_20" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_20" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(21,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_21" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_21" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                        </tbody>
                        <thead class="table-light" data-bs-toggle="collapse" data-bs-target="#section3" aria-expanded="true" style="cursor: pointer;">
                            <tr class="thead">
                                <th colspan="13">Fase 3 - Confirmación embarazo - Primer Trimestre</th>
                            </tr>
                        </thead>
                        <tbody id="section3" class="collapse show">
                            <tr class="thead">
                                <th>Preparación Endometrial > Transferencia</th>
                                <th>Descripción</th>
                                <th>Resultado</th>
                                <th>Underway</th>
                                <th colspan="2">Ícono resumen</th>
                                <th>Uploading</th>
                                <th>Habilitar</th>
                                <th>Uploading</th>
                                <th>Habilitar</th>
                                <th>Uploading</th>
                                <th>Habilitar</th>
                                <th>Habilitar Vista</th>
                            </tr>
                            <tr>
                                <td>Latido de corazón <br> Détection du battement du coeur fetal</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="esperandoSDG">
                                            Esperando SDG
                                        </option>
                                        <option value="successful">
                                            Successful
                                        </option>
                                        <option value="noConfirmado">
                                            No Confirmado
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(22,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_22" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_22" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(23,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_23" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_23" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(24,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_24" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_24" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Seg ginecologica <br> Suivi gynécologique</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="-">
                                            -
                                        </option>
                                        <option value="programada">
                                            Programada
                                        </option>
                                        <option value="cancelada">
                                            Cancelada
                                        </option>
                                        <option value="realizada">
                                            Realizada
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(25,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_25" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_25" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(26,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_26" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_26" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(27,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_27" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_27" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Materno Fetal 1 <br> Suivi Materno Fetal 1</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="-">
                                            -
                                        </option>
                                        <option value="programada">
                                            Programada
                                        </option>
                                        <option value="cancelada">
                                            Cancelada
                                        </option>
                                        <option value="realizada">
                                            Realizada
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(28,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_28" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_28" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(29,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_29" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_29" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(30,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_30" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_30" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                        </tbody>
                        <thead class="table-light" data-bs-toggle="collapse" data-bs-target="#section4" aria-expanded="true" style="cursor: pointer;">
                            <tr class="thead">
                                <th colspan="13">Fase 4 - Seguimiento del embarazo - Segundo trimestre</th>
                            </tr>
                        </thead>
                        <tbody id="section4" class="collapse show">
                            <tr>
                                <td>Seg ginecologica <br> Suivi gynécologique</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="-">
                                            -
                                        </option>
                                        <option value="programada">
                                            Programada
                                        </option>
                                        <option value="cancelada">
                                            Cancelada
                                        </option>
                                        <option value="realizada">
                                            Realizada
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(31,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_31" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_31" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(32,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_32" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_32" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <!-- <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)> -->
                                <td>
                                    <button onclick="toggleOff(33,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_33" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_33" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <!-- <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <button onclick="toggleEye(1)" id="toggleButton_1">
                                        <i id="toggleIcon_1" class="fa-solid fa-eye"></i>
                                    </button>
                                </td> -->
                            </tr>
                            <tr>
                                <td>Seg ginecologica <br> Suivi gynécologique</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="-">
                                            -
                                        </option>
                                        <option value="programada">
                                            Programada
                                        </option>
                                        <option value="cancelada">
                                            Cancelada
                                        </option>
                                        <option value="realizada">
                                            Realizada
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(34,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_34" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_34" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(35,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_35" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_35" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(36,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_36" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_36" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Materno Fetal 2 <br> Suivi Materno Fetal 2</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="-">
                                            -
                                        </option>
                                        <option value="programada">
                                            Programada
                                        </option>
                                        <option value="cancelada">
                                            Cancelada
                                        </option>
                                        <option value="realizada">
                                            Realizada
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(37,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_37" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_37" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(38,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_38" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_38" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(39,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_39" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_39" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Seg ginecologica <br> Suivi gynécologique</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="-">
                                            -
                                        </option>
                                        <option value="programada">
                                            Programada
                                        </option>
                                        <option value="cancelada">
                                            Cancelada
                                        </option>
                                        <option value="realizada">
                                            Realizada
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(40,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_40" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_40" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(41,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_41" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_41" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(42,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_42" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_42" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                        </tbody>
                        <thead class="table-light" data-bs-toggle="collapse" data-bs-target="#section5" aria-expanded="true" style="cursor: pointer;">
                            <tr class="thead">
                                <th colspan="13">Fase 1 - Crio embrio</th>
                            </tr>
                        </thead>
                        <tbody id="section5" class="collapse show">
                            <tr>
                                <td>Seg ginecologica <br> Suivi gynécologique</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="-">
                                            -
                                        </option>
                                        <option value="programada">
                                            Programada
                                        </option>
                                        <option value="cancelada">
                                            Cancelada
                                        </option>
                                        <option value="realizada">
                                            Realizada
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(42,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_42" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_42" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(43,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_43" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_43" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(44,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_44" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_44" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Materno Fetal 3 <br> Suivi Materno Fetal 3</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="-">
                                            -
                                        </option>
                                        <option value="programada">
                                            Programada
                                        </option>
                                        <option value="cancelada">
                                            Cancelada
                                        </option>
                                        <option value="realizada">
                                            Realizada
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(45,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_45" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_45" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(46,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_46" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_46" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(47,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_47" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_47" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Seg ginecologica <br> Suivi gynécologique</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="-">
                                            -
                                        </option>
                                        <option value="programada">
                                            Programada
                                        </option>
                                        <option value="cancelada">
                                            Cancelada
                                        </option>
                                        <option value="realizada">
                                            Realizada
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(48,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_48" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_48" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(49,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_49" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_49" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(50,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_50" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_50" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Seg ginecologica <br> Suivi gynécologique</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="-">
                                            -
                                        </option>
                                        <option value="programada">
                                            Programada
                                        </option>
                                        <option value="cancelada">
                                            Cancelada
                                        </option>
                                        <option value="realizada">
                                            Realizada
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(51,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_51" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_51" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(52,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_52" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_52" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(53,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_53" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_53" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Seg ginecologica <br> Suivi gynécologique</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="-">
                                            -
                                        </option>
                                        <option value="programada">
                                            Programada
                                        </option>
                                        <option value="cancelada">
                                            Cancelada
                                        </option>
                                        <option value="realizada">
                                            Realizada
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(54,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_54" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_54" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(55,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_55" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_55" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(56,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_56" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_56" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Seg ginecologica <br> Suivi gynécologique</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="-">
                                            -
                                        </option>
                                        <option value="programada">
                                            Programada
                                        </option>
                                        <option value="cancelada">
                                            Cancelada
                                        </option>
                                        <option value="realizada">
                                            Realizada
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(57,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_57" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_57" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(58,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_58" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_58" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(59,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_59" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_59" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Seg ginecologica <br> Suivi gynécologique</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="-">
                                            -
                                        </option>
                                        <option value="programada">
                                            Programada
                                        </option>
                                        <option value="cancelada">
                                            Cancelada
                                        </option>
                                        <option value="realizada">
                                            Realizada
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(60,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_60" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_60" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(61,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_61" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_61" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(62,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_62" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_62" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Seg ginecologica <br> Suivi gynécologique</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="-">
                                            -
                                        </option>
                                        <option value="programada">
                                            Programada
                                        </option>
                                        <option value="cancelada">
                                            Cancelada
                                        </option>
                                        <option value="realizada">
                                            Realizada
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(63,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_63" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_63" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(64,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_64" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_64" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(65,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_65" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_65" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Estimada fecha de parto <br> Date probable de la naissance</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
                                    <select>
                                        <option value="-">
                                            -
                                        </option>
                                        <option value="programada">
                                            Programada
                                        </option>
                                        <option value="cancelada">
                                            Cancelada
                                        </option>
                                        <option value="realizada">
                                            Realizada
                                        </option>
                                    </select>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(66,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_66" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_66" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(67,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_67" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_67" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td contenteditable="true" onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>-</td>
                                <td>
                                    <button onclick="toggleOff(68,false)">
                                        <?php if (false) {?>
                                            <i id="toggleIcon_off_68" class="fa-solid fa-toggle-on false"></i>
                                        <?php } else { ?>
                                            <i id="toggleIcon_off_68" class="fa-solid fa-toggle-off false"></i>
                                        <?php } ?>
                                    </button>
                                </td>
                                <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)><i class="fa-solid fa-eye"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <!-- Favicon -->
        <script src="https://kit.fontawesome.com/b8332e4c7c.js" crossorigin="anonymous"></script>
        <!-- Animation -->
        <script>
            // <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
            //                         <button onclick="toggleOff(1)" id="toggleButton_off_1">
            //                             <i id="toggleIcon_off_1" class="fa-solid fa-toggle-off_1"></i>
            //                         </button>
            //                     </td>
            //                     <td onblur=saveEdit(this,1) onkeydown=handleEnter(event,this,1)>
            //                         <button onclick="toggleEye(1)" id="toggleButton_1">
            //                             <i id="toggleIcon_1" class="fa-solid fa-eye"></i>
            //                         </button>

            function toggleOff(id,state) {

                // <button onclick="toggleOff(1)">
                //                         <i id="toggleIcon_off_1" class="fa-solid fa-toggle-off"></i>
                //                     </button>

                // const button = document.getElementById('toggleButton' + id);
                const icon = document.getElementById('toggleIcon_off_' + id);

                let isOn = state;
                // Add animation class
                icon.classList.add('icon-animate');

                // // Change icon class after short delay
                setTimeout(() => {
                    // icon.classList.remove('fa-eye', 'fa-eye-slash');
                    // icon.classList.add(isOn ? 'fa-eye' : 'fa-eye-slash');
                    icon.classList.remove('fa-toggle-off', 'fa-toggle-on');
                    icon.classList.add(isOn ? 'fa-toggle-off' : 'fa-toggle-on');
                    isOn = !isOn;
                }, 150); // Halfway through the animation

                // // Remove animation class after it's done
                setTimeout(() => {
                    icon.classList.remove('icon-animate');
                }, 300);
            };

            // const button_off = document.getElementById('toggleButton_off');
            // const icon_off = document.getElementById('toggleIcon_off');

            // let isOn_off = false;

            // button_off.addEventListener('click', () => {
            // // Add animation class
            // icon_off.classList.add('icon-animate');

            // // Change icon class after short delay
            // setTimeout(() => {
            // icon_off.classList.remove('fa-toggle-off', 'fa-toggle-on');
            // icon_off.classList.add(isOn_off ? 'fa-toggle-off' : 'fa-toggle-on');
            // isOn_off = !isOn_off;
            // }, 150); // Halfway through the animation

            // // Remove animation class after it's done
            // setTimeout(() => {
            // icon_off.classList.remove('icon-animate');
            // }, 300);
            // });
        </script>

        <!-- Custom JS -->
        <script src="build/js/bundle2.min.js"></script>
        <script>
            // function handleEnter(event, cell, id) {
            //     if (event.key === "Enter") {
            //         event.preventDefault(); // Prevent newline in the cell
            //         saveEdit(cell, id); // Save the data
            //         cell.blur(); // Trigger blur to exit editing mode
            //     }
            // }

            // function saveEdit(cell, id) {
            //     const value = cell.innerText.trim();

            //     // Simulate server update
            //     console.log(`Saving ID ${id} with value: ${value}`);

            //     // Example fetch to PHP backend:
            //     /*
            //     fetch('update.php', {
            //       method: 'POST',
            //       headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            //       body: `id=${id}&value=${encodeURIComponent(value)}`
            //     })
            //     .then(res => res.text())
            //     .then(response => {
            //       console.log('Server says:', response);
            //     });
            //     */
            // }
        </script>
</main>

<?php
include 'includes/templates/footer.php';
?>