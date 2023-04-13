<?php
include 'includes/templates/header.php';
include "includes/app.php";
if ((!($_SESSION['login'])) || $_SESSION['form']) {
    header('location: /index.php');
}
$conn = connectDB();
// var_dump($_REQUEST);

if (isset($_REQUEST['form_name'])) {
    $form_name = stripslashes($_REQUEST['form_name']);
    $form_name = mysqli_real_escape_string($conn, $form_name);
    $form_last_name = stripslashes($_REQUEST['form_last_name']);
    $form_last_name = mysqli_real_escape_string($conn, $form_last_name);
    $form_age = stripslashes($_REQUEST['form_age']);
    $form_age = mysqli_real_escape_string($conn, $form_age);
    $form_size = stripslashes($_REQUEST['form_size']);
    $form_size = mysqli_real_escape_string($conn, $form_size);
    $form_weight = stripslashes($_REQUEST['form_weight']);
    $form_weight = mysqli_real_escape_string($conn, $form_weight);
    // 
    // $form_race = stripslashes($_REQUEST['form_race']);
    // $form_race = mysqli_real_escape_string($conn, $form_race);
    if (isset($_REQUEST['caucasico'])) {
        $caucasico = stripslashes($_REQUEST['caucasico']);
        $caucasico = mysqli_real_escape_string($conn, $caucasico);
    } else {
        $caucasico = '-';
    }
    if (isset($_REQUEST['arabe'])) {
        $arabe = stripslashes($_REQUEST['arabe']);
        $arabe = mysqli_real_escape_string($conn, $arabe);
    } else {
        $arabe = '-';
    }
    if (isset($_REQUEST['indoario'])) {
        $indoario = stripslashes($_REQUEST['indoario']);
        $indoario = mysqli_real_escape_string($conn, $indoario);
    } else {
        $indoario = '-';
    }
    if (isset($_REQUEST['amarillo'])) {
        $amarillo = stripslashes($_REQUEST['amarillo']);
        $amarillo = mysqli_real_escape_string($conn, $amarillo);
    } else {
        $amarillo = '-';
    }
    if (isset($_REQUEST['turco'])) {
        $turco = stripslashes($_REQUEST['turco']);
        $turco = mysqli_real_escape_string($conn, $turco);
    } else {
        $turco = '-';
    }
    if (isset($_REQUEST['negro_raza'])) {
        $negro_raza = stripslashes($_REQUEST['negro_raza']);
        $negro_raza = mysqli_real_escape_string($conn, $negro_raza);
    } else {
        $negro_raza = '-';
    }
    if (isset($_REQUEST['amerindio'])) {
        $amerindio = stripslashes($_REQUEST['amerindio']);
        $amerindio = mysqli_real_escape_string($conn, $amerindio);
    } else {
        $amerindio = '-';
    }
    if (isset($_REQUEST['mestizos'])) {
        $mestizos = stripslashes($_REQUEST['mestizos']);
        $mestizos = mysqli_real_escape_string($conn, $mestizos);
    } else {
        $mestizos = '-';
    }
    if (isset($_REQUEST['austronesia'])) {
        $austronesia = stripslashes($_REQUEST['austronesia']);
        $austronesia = mysqli_real_escape_string($conn, $austronesia);
    } else {
        $austronesia = '-';
    }
    // 
    // muy_palido blanca mate muy_mate negra
    // $form_skin = stripslashes($_REQUEST['form_skin']);
    // $form_skin = mysqli_real_escape_string($conn, $form_skin);
    if (isset($_REQUEST['muy_palido'])) {
        $muy_palido = stripslashes($_REQUEST['muy_palido']);
        $muy_palido = mysqli_real_escape_string($conn, $muy_palido);
    } else {
        $muy_palido = '-';
    }
    if (isset($_REQUEST['blanca'])) {
        $blanca = stripslashes($_REQUEST['blanca']);
        $blanca = mysqli_real_escape_string($conn, $blanca);
    } else {
        $blanca = '-';
    }
    if (isset($_REQUEST['mate'])) {
        $mate = stripslashes($_REQUEST['mate']);
        $mate = mysqli_real_escape_string($conn, $mate);
    } else {
        $mate = '-';
    }
    if (isset($_REQUEST['muy_mate'])) {
        $muy_mate = stripslashes($_REQUEST['muy_mate']);
        $muy_mate = mysqli_real_escape_string($conn, $muy_mate);
    } else {
        $muy_mate = '-';
    }
    if (isset($_REQUEST['negra'])) {
        $negra = stripslashes($_REQUEST['negra']);
        $negra = mysqli_real_escape_string($conn, $negra);
    } else {
        $negra = '-';
    }
    // 
    // $form_eyes_color = stripslashes($_REQUEST['form_eyes_color']);
    // $form_eyes_color = mysqli_real_escape_string($conn, $form_eyes_color);
    // 
    if (isset($_REQUEST['gris'])) {
        $gris = stripslashes($_REQUEST['gris']);
        $gris = mysqli_real_escape_string($conn, $gris);
    } else {
        $gris = '-';
    }
    if (isset($_REQUEST['azul'])) {
        $azul = stripslashes($_REQUEST['azul']);
        $azul = mysqli_real_escape_string($conn, $azul);
    } else {
        $azul = '-';
    }
    if (isset($_REQUEST['verde'])) {
        $verde = stripslashes($_REQUEST['verde']);
        $verde = mysqli_real_escape_string($conn, $verde);
    } else {
        $verde = '-';
    }
    if (isset($_REQUEST['marron_claro'])) {
        $marron_claro = stripslashes($_REQUEST['marron_claro']);
        $marron_claro = mysqli_real_escape_string($conn, $marron_claro);
    } else {
        $marron_claro = '-';
    }
    if (isset($_REQUEST['marron_oscuro'])) {
        $marron_oscuro = stripslashes($_REQUEST['marron_oscuro']);
        $marron_oscuro = mysqli_real_escape_string($conn, $marron_oscuro);
    } else {
        $marron_oscuro = '-';
    }
    if (isset($_REQUEST['negro'])) {
        $negro = stripslashes($_REQUEST['negro']);
        $negro = mysqli_real_escape_string($conn, $negro);
    } else {
        $negro = '-';
    }
    // $form_morfo = stripslashes($_REQUEST['form_morfo']);
    // $form_morfo = mysqli_real_escape_string($conn, $form_morfo);
    if (isset($_REQUEST['muy_delgada'])) {
        $muy_delgada = stripslashes($_REQUEST['muy_delgada']);
        $muy_delgada = mysqli_real_escape_string($conn, $muy_delgada);
    } else {
        $muy_delgada = '-';
    }
    if (isset($_REQUEST['delgada'])) {
        $delgada = stripslashes($_REQUEST['delgada']);
        $delgada = mysqli_real_escape_string($conn, $delgada);
    } else {
        $delgada = '-';
    }
    if (isset($_REQUEST['normal'])) {
        $normal = stripslashes($_REQUEST['normal']);
        $normal = mysqli_real_escape_string($conn, $normal);
    } else {
        $normal = '-';
    }
    if (isset($_REQUEST['atletica'])) {
        $atletica = stripslashes($_REQUEST['atletica']);
        $atletica = mysqli_real_escape_string($conn, $atletica);
    } else {
        $atletica = '-';
    }
    if (isset($_REQUEST['gruesa'])) {
        $gruesa = stripslashes($_REQUEST['gruesa']);
        $gruesa = mysqli_real_escape_string($conn, $gruesa);
    } else {
        $gruesa = '-';
    }
    // $form_hair_color = stripslashes($_REQUEST['form_hair_color']);
    // $form_hair_color = mysqli_real_escape_string($conn, $form_hair_color);
    if (isset($_REQUEST['rubio'])) {
        $rubio = stripslashes($_REQUEST['rubio']);
        $rubio = mysqli_real_escape_string($conn, $rubio);
    } else {
        $rubio = '-';
    }
    if (isset($_REQUEST['castano_claro'])) {
        $castano_claro = stripslashes($_REQUEST['castano_claro']);
        $castano_claro = mysqli_real_escape_string($conn, $castano_claro);
    } else {
        $castano_claro = '-';
    }
    if (isset($_REQUEST['castano_oscuro'])) {
        $castano_oscuro = stripslashes($_REQUEST['castano_oscuro']);
        $castano_oscuro = mysqli_real_escape_string($conn, $castano_oscuro);
    } else {
        $castano_oscuro = '-';
    }
    if (isset($_REQUEST['negro_cabello'])) {
        $negro_cabello = stripslashes($_REQUEST['negro_cabello']);
        $negro_cabello = mysqli_real_escape_string($conn, $negro_cabello);
    } else {
        $negro_cabello = '-';
    }
    if (isset($_REQUEST['pelirrojo'])) {
        $pelirrojo = stripslashes($_REQUEST['pelirrojo']);
        $pelirrojo = mysqli_real_escape_string($conn, $pelirrojo);
    } else {
        $pelirrojo = '-';
    }
    // $form_hair_type = stripslashes($_REQUEST['form_hair_type']);
    // $form_hair_type = mysqli_real_escape_string($conn, $form_hair_type);
    if (isset($_REQUEST['liso'])) {
        $liso = stripslashes($_REQUEST['liso']);
        $liso = mysqli_real_escape_string($conn, $liso);
    } else {
        $liso = '-';
    }
    if (isset($_REQUEST['ondulado'])) {
        $ondulado = stripslashes($_REQUEST['ondulado']);
        $ondulado = mysqli_real_escape_string($conn, $ondulado);
    } else {
        $ondulado = '-';
    }
    if (isset($_REQUEST['fino'])) {
        $fino = stripslashes($_REQUEST['fino']);
        $fino = mysqli_real_escape_string($conn, $fino);
    } else {
        $fino = '-';
    }
    if (isset($_REQUEST['grueso'])) {
        $grueso = stripslashes($_REQUEST['grueso']);
        $grueso = mysqli_real_escape_string($conn, $grueso);
    } else {
        $grueso = '-';
    }
    // $form_face_shape = stripslashes($_REQUEST['form_face_shape']);
    // $form_face_shape = mysqli_real_escape_string($conn, $form_face_shape);
    if (isset($_REQUEST['ovalada'])) {
        $ovalada = stripslashes($_REQUEST['ovalada']);
        $ovalada = mysqli_real_escape_string($conn, $ovalada);
    } else {
        $ovalada = '-';
    }
    if (isset($_REQUEST['redonda'])) {
        $redonda = stripslashes($_REQUEST['redonda']);
        $redonda = mysqli_real_escape_string($conn, $redonda);
    } else {
        $redonda = '-';
    }
    if (isset($_REQUEST['alargada'])) {
        $alargada = stripslashes($_REQUEST['alargada']);
        $alargada = mysqli_real_escape_string($conn, $alargada);
    } else {
        $alargada = '-';
    }
    if (isset($_REQUEST['cuadrada'])) {
        $cuadrada = stripslashes($_REQUEST['cuadrada']);
        $cuadrada = mysqli_real_escape_string($conn, $cuadrada);
    } else {
        $cuadrada = '-';
    }
    $form_notes = stripslashes($_REQUEST['form_notes']);
    $form_notes = mysqli_real_escape_string($conn, $form_notes);
    $form_date = stripslashes($_REQUEST['form_date']);
    $form_date = mysqli_real_escape_string($conn, $form_date);
    $userId = $_SESSION['id'];
    $query = "SELECT * FROM form WHERE userId='${userId}'";
    $result   = mysqli_query($conn, $query);
    $repeat = $result->num_rows;
    // var_dump($_REQUEST);
    if ($repeat > 0) {
        $query = "UPDATE form SET form_name='${form_name}', form_last_name='${form_last_name}', form_age='${form_age}', form_size='${form_size}', form_weight='${form_weight}', caucasico='${caucasico}', arabe='${arabe}', indoario='${indoario}', amarillo='${amarillo}', turco='${turco}', negro_raza='${negro_raza}', amerindio='${amerindio}', mestizos='${mestizos}', austronesia='${austronesia}', muy_palido='${muy_palido}', blanca='${blanca}', mate='${mate}', muy_mate='${muy_mate}', negra='${negra}', gris='${gris}', azul='${azul}', verde='${verde}', marron_claro='${marron_claro}', marron_oscuro='${marron_oscuro}', negro='${negro}', muy_delgada='${muy_delgada}', delgada='${delgada}', normal='${normal}', atletica='${atletica}', gruesa='${gruesa}', rubio='${rubio}', castano_claro='${castano_claro}', castano_oscuro='${castano_oscuro}', negro_cabello='${negro_cabello}', pelirrojo='${pelirrojo}', liso='${liso}', ondulado='${ondulado}', fino='${fino}', grueso='${grueso}', ovalada='${ovalada}', redonda='${redonda}', alargada='${alargada}', cuadrada='${cuadrada}', form_notes='${form_notes}', form_date='${form_date}' WHERE userId = ${userId}";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            header("Location: phenotypeFIle.php?msg=Se han actualizado las respuestas");
        } else {
            header("Location: phenotypeFIle.php?msg=Hubo un problema con el registro. Por favor, intente nuevamente");
        }
    } else {
        $query    = "INSERT into `form` (form_name, form_last_name, form_age, form_size, form_weight, caucasico, arabe, indoario, amarillo, turco, negro_raza, amerindio, mestizos, austronesia, muy_palido, blanca, mate, muy_mate, negra, gris, azul, verde, marron_claro, marron_oscuro, negro, muy_delgada, delgada, normal, atletica, gruesa, rubio, castano_claro, castano_oscuro, negro_cabello, pelirrojo, liso, ondulado, fino, grueso, ovalada, redonda, alargada, cuadrada, form_notes, form_date, userId)
                    VALUES ('$form_name', '$form_last_name', '$form_age', '$form_size', '$form_weight', '$caucasico', '$arabe', '$indoario', '$amarillo', '$turco', '$negro_raza', '$amerindio', '$mestizos', '$austronesia', '$muy_palido', '$blanca', '$mate', '$muy_mate', '$negra', '$gris', '$azul', '$verde', '$marron_claro', '$marron_oscuro', '$negro', '$muy_delgada', '$delgada', '$normal', '$atletica', '$gruesa', '$rubio', '$castano_claro', '$castano_oscuro', '$negro_cabello', '$pelirrojo', '$liso', '$ondulado', '$fino', '$grueso', '$ovalada', '$redonda', '$alargada', '$cuadrada', '$form_notes', '$form_date', '$userId')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            header("Location: phenotypeFIle.php?msg=Se han registrado las respuestas");
        } else {
            header("Location: phenotypeFIle.php?msg=Hubo un problema con el registro. Por favor, intente nuevamente");
        }
    }
}

?>
<main>
    <?php if (isset($_GET['msg'])) { ?>
        <p class="error"><?php echo $_GET['msg']; ?></p>
    <?php } else { ?>
        <div class="form-header">
            <div class="form-header-logo">
                <img src="build/img/icons/EggDonorWhite.webp" alt="EggDonor">
            </div>
            <div class="form-header-title form-white">
                <div class="spanish">
                    Ficha Fenotipo / Selección Donante de Óvulos
                </div>
                <div class="french">
                    Ficha Fenotipo / Selección Donante de Óvulos
                </div>
            </div>
        </div>
        <form class="form form-phenotype" action="" method="post" enctype="multipart/form-data">
            <div class="form-top">
                <div class="col-md-6 form-top-element">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Nombre IP:
                        </div>
                        <div class="french">
                            Prénom
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_name" required/>
                    <div class="invalid-feedback">
                        <div>Ingrese el nombre</div>
                    </div>
                </div>
                <div class="col-md-6 form-top-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Apellidos IP:
                        </div>
                        <div class="french">
                            Nom de famille
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_last_name" required />
                    <div class="invalid-feedback">
                        <div>Ingrese los apellidos</div>
                    </div>
                </div>
            </div>
            <div class="form-characteristics">
                <div class="form-subtitle form-white">
                    <div class="spanish">Características de la donante // </div>
                    <div class="space"> </div>
                    <div class="french">Caractéristiques de la donneuse </div>
                </div>
            </div>
            <div class="form-characteristics-text">
                <div class="col-md-4 form-characteristics-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Edad:
                        </div>
                        <div class="french">
                            Âge
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" required /> -->
                    <select name="form_age">
                        <option value="18-21">18-21</option>
                        <option value="22-24">22-24</option>
                        <option value="25-28">25-28</option>
                        <option value="29-31">29-31</option>
                        <option value="+31">+31</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-4 form-characteristics-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Talla (m):
                        </div>
                        <div class="french">
                            Taille (m)
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_size" required /> -->
                    <select name="form_size">
                        <option value="1.55-1.60">1.55-1.60</option>
                        <option value="1.60-1.65">1.60-1.65</option>
                        <option value="1.65-1.70">1.65-1.70</option>
                        <option value="1.70-1.75">1.70-1.75</option>
                        <option value="1.75-1.80">1.75-1.80</option>
                        <option value="1.80-1.85">1.80-1.85</option>
                        <option value="1.85-1.90">1.85-1.90</option>
                        <option value="1.90-1.95">1.90-1.95</option>
                        <option value="1.95-2.00">1.95-2.00</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la talla</div>
                    </div>
                </div>
                <div class="col-md-4 form-characteristics-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Peso (kg):
                        </div>
                        <div class="french">
                            Poids (kg)
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_weight" required /> -->
                    <select name="form_weight">
                        <option value="45-50">45-50</option>
                        <option value="50-55">50-55</option>
                        <option value="55-60">55-60</option>
                        <option value="60-65">60-65</option>
                        <option value="65-70">65-70</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese el peso</div>
                    </div>
                </div>
            </div>
            <div class="form-grid">
                <div class="column-1">
                    <div class="form-grid-element">
                        <div class="form-subtitle-grid form-white">
                            <div class="spanish">Razas y fenotipos humanos: </div>
                            <div class="french">Races et Phènotypes </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="caucasico" type="checkbox" value="caucasico" id="caucasico">
                            <label class="form-check-label" for="caucasico">
                                <div class="spanish">Caucásico blanco // </div>
                                <div class="space"> </div>
                                <div class="french">caucasien/blanc</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="arabe" type="checkbox" value="arabe" id="arabe">
                            <label class="form-check-label" for="arabe">
                                <div class="spanish">Árabe/Berbere (África del norte, medio oriente) // </div>
                                <div class="space"> </div>
                                <div class="french">Arabe/Berbère (Afrique du Nord, Moyen-Orient)</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="indoario" type="checkbox" value="indoario" id="indoario">
                            <label class="form-check-label" for="indoario">
                                <div class="spanish">Indoario (Subcontinente indio) // </div>
                                <div class="space"> </div>
                                <div class="french">Indo-aryen (sous-continent indien)</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="amarillo" type="checkbox" value="amarillo" id="amarillo">
                            <label class="form-check-label" for="amarillo">
                                <div class="spanish">Amarillo (Extreme oriente Asia) // </div>
                                <div class="space"> </div>
                                <div class="french">Jaune (Extrême-Orient)</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="turco" type="checkbox" value="turco" id="turco">
                            <label class="form-check-label" for="turco">
                                <div class="spanish">Túrquico (Asia central) // </div>
                                <div class="space"> </div>
                                <div class="french">Turc (Asie centrale)</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="negro_raza" type="checkbox" value="negro_raza" id="negro_raza">
                            <label class="form-check-label" for="negro_raza">
                                <div class="spanish">Negro/Mulato (Africa subsahariana) // </div>
                                <div class="space"> </div>
                                <div class="french">Noir/Mulâtre (Afrique subsaharienne)</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="amerindio" type="checkbox" value="amerindio" id="amerindio">
                            <label class="form-check-label" for="amerindio">
                                <div class="spanish">Amerindio (Continente suramericano) // </div>
                                <div class="space"> </div>
                                <div class="french">Amérindien (Continent sud-américain)</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="mestizos" type="checkbox" value="mestizos" id="mestizos">
                            <label class="form-check-label" for="mestizos">
                                <div class="spanish">Mestizos (híbrido-racial) // </div>
                                <div class="space"> </div>
                                <div class="french">Métis (hybride-racial)</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="austronesia" type="checkbox" value="austronesia" id="austronesia">
                            <label class="form-check-label" for="austronesia">
                                <div class="spanish">Austronesia (océano índico/pacífico) // </div>
                                <div class="space"> </div>
                                <div class="french">Austronésie (Océan Indien/Pacifique)</div>
                            </label>
                        </div>
                    </div>
                    <div class="form-grid-element">
                        <div class="form-subtitle-grid form-white">
                            <div class="spanish">Piel: </div>
                            <div class="french">Peau </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="muy_palido" type="checkbox" value="muy_palido" id="muy_palido">
                            <label class="form-check-label" for="muy_palido">
                                <div class="spanish">Muy pálida // </div>
                                <div class="space"> </div>
                                <div class="french">très pâle</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="blanca" type="checkbox" value="blanca" id="blanca">
                            <label class="form-check-label" for="blanca">
                                <div class="spanish">Blanca // </div>
                                <div class="space"> </div>
                                <div class="french">blanche</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="mate" type="checkbox" value="mate" id="mate">
                            <label class="form-check-label" for="mate">
                                <div class="spanish">Mate // </div>
                                <div class="space"> </div>
                                <div class="french">matte</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="muy_mate" type="checkbox" value="muy_mate" id="muy_mate">
                            <label class="form-check-label" for="muy_mate">
                                <div class="spanish">Muy mate // </div>
                                <div class="space"> </div>
                                <div class="french">très matte</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="negra" type="checkbox" value="negra" id="negra">
                            <label class="form-check-label" for="negra">
                                <div class="spanish">Negra // </div>
                                <div class="space"> </div>
                                <div class="french">noir</div>
                            </label>
                        </div>
                    </div>
                    <div class="form-grid-element">
                        <div class="form-subtitle-grid form-white">
                            <div class="spanish">Color de ojos: </div>
                            <div class="french">Couleur des yeux </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="gris" type="checkbox" value="gris" id="gris">
                            <label class="form-check-label" for="gris">
                                <div class="spanish">Gris // </div>
                                <div class="space"> </div>
                                <div class="french">gris</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="azul" type="checkbox" value="azul" id="azul">
                            <label class="form-check-label" for="azul">
                                <div class="spanish">Azul // </div>
                                <div class="space"> </div>
                                <div class="french">bleu</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="verde" type="checkbox" value="verde" id="verde">
                            <label class="form-check-label" for="verde">
                                <div class="spanish">Verde // </div>
                                <div class="space"> </div>
                                <div class="french">vert</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="marron_claro" type="checkbox" value="marron_claro" id="marron_claro">
                            <label class="form-check-label" for="marron_claro">
                                <div class="spanish">Marrón Claro // </div>
                                <div class="space"> </div>
                                <div class="french">marrons claire</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="marron_oscuro" type="checkbox" value="marron_oscuro" id="marron_oscuro">
                            <label class="form-check-label" for="marron_oscuro">
                                <div class="spanish">Marrón Oscuro // </div>
                                <div class="space"> </div>
                                <div class="french">marrons foncé</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="negro" type="checkbox" value="negro" id="negro">
                            <label class="form-check-label" for="negro">
                                <div class="spanish">Negro // </div>
                                <div class="space"> </div>
                                <div class="french">noirs</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="column-2">
                    <div class="form-grid-element">
                        <div class="form-subtitle-grid form-white">
                            <div class="spanish">Morfología: </div>
                            <div class="french">Morphologie </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="muy_delgada" type="checkbox" value="muy_delgada" id="muy_delgada">
                            <label class="form-check-label" for="muy_delgada">
                                <div class="spanish">Muy delgada // </div>
                                <div class="space"> </div>
                                <div class="french">très mince</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="delgada" type="checkbox" value="delgada" id="delgada">
                            <label class="form-check-label" for="delgada">
                                <div class="spanish">Delgada // </div>
                                <div class="space"> </div>
                                <div class="french">mince</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="normal" type="checkbox" value="normal" id="normal">
                            <label class="form-check-label" for="normal">
                                <div class="spanish">Normal // </div>
                                <div class="space"> </div>
                                <div class="french">normal</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="atletica" type="checkbox" value="atletica" id="atletica">
                            <label class="form-check-label" for="atletica">
                                <div class="spanish">Atlética // </div>
                                <div class="space"> </div>
                                <div class="french">athlétique</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="gruesa" type="checkbox" value="gruesa" id="gruesa">
                            <label class="form-check-label" for="gruesa">
                                <div class="spanish">Gruesa/Robusta // </div>
                                <div class="space"> </div>
                                <div class="french">épais/robuste</div>
                            </label>
                        </div>
                    </div>
                    <div class="form-grid-element">
                        <div class="form-subtitle-grid form-white">
                            <div class="spanish">Cabello (color): </div>
                            <div class="french">Cheveux (couleur) </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="rubio" type="checkbox" value="rubio" id="rubio">
                            <label class="form-check-label" for="rubio">
                                <div class="spanish">Rubio // </div>
                                <div class="space"> </div>
                                <div class="french">blond</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="castano_claro" type="checkbox" value="castano_claro" id="castano_claro">
                            <label class="form-check-label" for="castano_claro">
                                <div class="spanish">Castaño claro // </div>
                                <div class="space"> </div>
                                <div class="french">châtain clair</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="castano_oscuro" type="checkbox" value="castano_oscuro" id="castano_oscuro">
                            <label class="form-check-label" for="castano_oscuro">
                                <div class="spanish">Castaño oscuro // </div>
                                <div class="space"> </div>
                                <div class="french">marron foncé</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="negro_cabello" type="checkbox" value="negro_cabello" id="negro_cabello">
                            <label class="form-check-label" for="negro_cabello">
                                <div class="spanish">Negro // </div>
                                <div class="space"> </div>
                                <div class="french">noir</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="pelirrojo" type="checkbox" value="pelirrojo" id="pelirrojo">
                            <label class="form-check-label" for="pelirrojo">
                                <div class="spanish">Pelirrojo // </div>
                                <div class="space"> </div>
                                <div class="french">roux</div>
                            </label>
                        </div>
                    </div>
                    <div class="form-grid-element">
                        <div class="form-subtitle-grid form-white">
                            <div class="spanish">Cabello (tipo): </div>
                            <div class="french">Cheveux (type) </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="liso" type="checkbox" value="liso" id="liso">
                            <label class="form-check-label" for="liso">
                                <div class="spanish">Liso // </div>
                                <div class="space"> </div>
                                <div class="french">lisse</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="ondulado" type="checkbox" value="ondulado" id="ondulado">
                            <label class="form-check-label" for="ondulado">
                                <div class="spanish">Ondulado // </div>
                                <div class="space"> </div>
                                <div class="french">frisé</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="fino" type="checkbox" value="fino" id="fino">
                            <label class="form-check-label" for="fino">
                                <div class="spanish">Fino // </div>
                                <div class="space"> </div>
                                <div class="french">fin</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="grueso" type="checkbox" value="grueso" id="grueso">
                            <label class="form-check-label" for="grueso">
                                <div class="spanish">Grueso // </div>
                                <div class="space"> </div>
                                <div class="french">épais</div>
                            </label>
                        </div>
                    </div>
                    <div class="form-grid-element">
                        <div class="form-subtitle-grid form-white">
                            <div class="spanish">Forma de cara: </div>
                            <div class="french">Forme du visage </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="ovalada" type="checkbox" value="ovalada" id="ovalada">
                            <label class="form-check-label" for="ovalada">
                                <div class="spanish">Ovalada // </div>
                                <div class="space"> </div>
                                <div class="french">ovale</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="redonda" type="checkbox" value="redonda" id="redonda">
                            <label class="form-check-label" for="redonda">
                                <div class="spanish">Redonda // </div>
                                <div class="space"> </div>
                                <div class="french">ronde</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="alargada" type="checkbox" value="alargada" id="alargada">
                            <label class="form-check-label" for="alargada">
                                <div class="spanish">Alargada // </div>
                                <div class="space"> </div>
                                <div class="french">allongé</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="cuadrada" type="checkbox" value="cuadrada" id="cuadrada">
                            <label class="form-check-label" for="cuadrada">
                                <div class="spanish">Cuadrada // </div>
                                <div class="space"> </div>
                                <div class="french">carré</div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-phenotype-msg">
                <div class="form-subtitle form-white">
                    <div class="spanish">Otros datos importantes a destacar: </div>
                    <div class="space"> </div>
                    <div class="french">Autres données importantes à noter </div>
                </div>
            </div>
            <!-- <div class="mb-3">
            <label for="validationTextarea" class="form-label">Textarea</label>
            <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
            <div class="invalid-feedback">
                Please enter a message in the textarea.
            </div>
        </div> -->
            <div class="col-md-12">
                <label for="validationTextarea" class="form-label"></label>
                <textarea class="form-control-phenotype-msg" name="form_notes" id="validationTextarea" required></textarea>
            </div>
            <div class="col-md-12 form-phenotype-text">
                <div class="spanish">NOTA: la donante será elegida buscando las mejores coincidencias con la ficha de fenotipo teniendo siempre en cuenta que la naturaleza tiene sus propias limitaciones y orígenes.</div>
                <div class="space"> </div>
                <div class="french">Remarque: la donneuse sera choisie en recherchant les meilleures correspondances avec le doissier phénotypique, en gardant toujours à l'esprit que la nature a ses propres limites et originges.</div>
            </div>
            <div class="form-top">
                <div class="col-md-6 form-top-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Fecha:
                        </div>
                        <div class="french">
                            Date
                        </div>
                    </label>
                    <input type="date" class="form-control-phenotype" id="validationCustom01" name="form_date" required />
                    <div class="invalid-feedback">
                        <div>Ingrese la fecha</div>
                    </div>
                </div>
            </div>
            <div class="form-btn">
                <button class="btn btn-send" type="submit">
                    <div>Enviar</div>
                </button>
            </div>
        </form>
        <div class="menu-users">
            <div class="logout">
                <a href="logout.php">
                    Cerrar sesión
                </a>
            </div>
        </div>
    <?php } ?>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
