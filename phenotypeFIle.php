<?php
include 'includes/templates/header.php';
include "includes/app.php";
if ((!($_SESSION['login'])) || $_SESSION['form'])  {
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
    $form_race = stripslashes($_REQUEST['form_race']);
    $form_race = mysqli_real_escape_string($conn, $form_race);
    $form_morfo = stripslashes($_REQUEST['form_morfo']);
    $form_morfo = mysqli_real_escape_string($conn, $form_morfo);
    $form_skin = stripslashes($_REQUEST['form_skin']);
    $form_skin = mysqli_real_escape_string($conn, $form_skin);
    $form_eyes_color = stripslashes($_REQUEST['form_eyes_color']);
    $form_eyes_color = mysqli_real_escape_string($conn, $form_eyes_color);
    $form_hair_color = stripslashes($_REQUEST['form_hair_color']);
    $form_hair_color = mysqli_real_escape_string($conn, $form_hair_color);
    $form_hair_type = stripslashes($_REQUEST['form_hair_type']);
    $form_hair_type = mysqli_real_escape_string($conn, $form_hair_type);
    $form_face_shape = stripslashes($_REQUEST['form_face_shape']);
    $form_face_shape = mysqli_real_escape_string($conn, $form_face_shape);
    $form_notes = stripslashes($_REQUEST['form_notes']);
    $form_notes = mysqli_real_escape_string($conn, $form_notes);
    $form_date = stripslashes($_REQUEST['form_date']);
    $form_date = mysqli_real_escape_string($conn, $form_date);
    $userId = $_SESSION['id'];
    $query = "SELECT * FROM form WHERE userId='${userId}'";
    $result   = mysqli_query($conn, $query);
    $repeat = $result->num_rows;
    if ($repeat > 0) {
        $query = "UPDATE form SET form_name='${form_name}', form_last_name='${form_last_name}', form_age='${form_age}', form_size='${form_size}', form_weight='${form_weight}', form_race='${form_race}', form_morfo='${form_morfo}', form_skin='${form_skin}', form_eyes_color='${form_eyes_color}', form_hair_color='${form_hair_color}', form_hair_type='${form_hair_type}', form_face_shape='${form_face_shape}', form_notes='${form_notes}', form_date='${form_date}' WHERE userId = ${userId}";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            header("Location: phenotypeFIle.php?msg=Se han actualizado las respuestas");
        } else {
            header("Location: phenotypeFIle.php?msg=Hubo un problema con el registro. Por favor, intente nuevamente");
        }
    } else {
        $query    = "INSERT into `form` (form_name, form_last_name, form_age, form_size, form_weight, form_race, form_morfo, form_skin, form_eyes_color, form_hair_color, form_hair_type, form_face_shape, form_notes, form_date, userId)
                    VALUES ('$form_name', '$form_last_name', '$form_age', '$form_size', '$form_weight', '$form_race', '$form_morfo', '$form_skin', '$form_eyes_color', '$form_hair_color', '$form_hair_type', '$form_face_shape', '$form_notes', '$form_date', '$userId')";
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
                    <label for="validationCustom01">
                        <div class="spanish">
                            Nombre IP:
                        </div>
                        <div class="french">
                            Prénom
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_name" required />
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
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" required />
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-4 form-characteristics-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Talla (cm):
                        </div>
                        <div class="french">
                            Taille (cm)
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_size" required />
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
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_weight" required />
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
                            <input class="form-check-input" name="form_race" type="radio" value="caucasico" id="caucasico" required>
                            <label class="form-check-label" for="caucasico">
                                <div class="spanish">Caucásico blanco // </div>
                                <div class="space"> </div>
                                <div class="french">caucasien/blanc</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_race" type="radio" value="arabe" id="arabe">
                            <label class="form-check-label" for="arabe">
                                <div class="spanish">Árabe/Berbere (África del norte, medio oriente) // </div>
                                <div class="space"> </div>
                                <div class="french">Arabe/Berbère (Afrique du Nord, Moyen-Orient)</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_race" type="radio" value="indoario" id="indoario">
                            <label class="form-check-label" for="indoario">
                                <div class="spanish">Indoario (Subcontinente indio) // </div>
                                <div class="space"> </div>
                                <div class="french">Indo-aryen (sous-continent indien)</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_race" type="radio" value="amarillo" id="amarillo">
                            <label class="form-check-label" for="amarillo">
                                <div class="spanish">Amarillo (Extreme oriente Asia) // </div>
                                <div class="space"> </div>
                                <div class="french">Jaune (Extrême-Orient)</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_race" type="radio" value="turco" id="turco">
                            <label class="form-check-label" for="turco">
                                <div class="spanish">Túrquico (Asia central) // </div>
                                <div class="space"> </div>
                                <div class="french">Turc (Asie centrale)</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_race" type="radio" value="negro" id="negro">
                            <label class="form-check-label" for="negro">
                                <div class="spanish">Negro/Mulato (Africa subsahariana) // </div>
                                <div class="space"> </div>
                                <div class="french">Noir/Mulâtre (Afrique subsaharienne)</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_race" type="radio" value="amerindio" id="amerindio">
                            <label class="form-check-label" for="amerindio">
                                <div class="spanish">Amerindio (Continente suramericano) // </div>
                                <div class="space"> </div>
                                <div class="french">Amérindien (Continent sud-américain)</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_race" type="radio" value="mestizos" id="mestizos">
                            <label class="form-check-label" for="mestizos">
                                <div class="spanish">Mestizos (híbrido-racial) // </div>
                                <div class="space"> </div>
                                <div class="french">Métis (hybride-racial)</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_race" type="radio" value="austronesia" id="austronesia">
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
                            <input class="form-check-input" name="form_skin" type="radio" value="muy_palido" id="muy_palido" required>
                            <label class="form-check-label" for="muy_palido">
                                <div class="spanish">Muy pálida // </div>
                                <div class="space"> </div>
                                <div class="french">très pâle</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_skin" type="radio" value="blanca" id="blanca">
                            <label class="form-check-label" for="blanca">
                                <div class="spanish">Blanca // </div>
                                <div class="space"> </div>
                                <div class="french">blanche</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_skin" type="radio" value="mate" id="mate">
                            <label class="form-check-label" for="mate">
                                <div class="spanish">Mate // </div>
                                <div class="space"> </div>
                                <div class="french">matte</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_skin" type="radio" value="muy_mate" id="muy_mate">
                            <label class="form-check-label" for="muy_mate">
                                <div class="spanish">Muy mate // </div>
                                <div class="space"> </div>
                                <div class="french">très matte</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_skin" type="radio" value="negra" id="negra">
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
                            <input class="form-check-input" name="form_eyes_color" type="radio" value="gris" id="gris" required>
                            <label class="form-check-label" for="gris">
                                <div class="spanish">Gris // </div>
                                <div class="space"> </div>
                                <div class="french">gris</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_eyes_color" type="radio" value="azul" id="azul">
                            <label class="form-check-label" for="azul">
                                <div class="spanish">Azul // </div>
                                <div class="space"> </div>
                                <div class="french">bleu</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_eyes_color" type="radio" value="verde" id="verde">
                            <label class="form-check-label" for="verde">
                                <div class="spanish">Verde // </div>
                                <div class="space"> </div>
                                <div class="french">vert</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_eyes_color" type="radio" value="marron_claro" id="marron_claro">
                            <label class="form-check-label" for="marron_claro">
                                <div class="spanish">Marrón Claro // </div>
                                <div class="space"> </div>
                                <div class="french">marrons claire</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_eyes_color" type="radio" value="marron_oscuro" id="marron_oscuro">
                            <label class="form-check-label" for="marron_oscuro">
                                <div class="spanish">Marrón Oscuro // </div>
                                <div class="space"> </div>
                                <div class="french">marrons foncé</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_eyes_color" type="radio" value="negro" id="negro">
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
                            <input class="form-check-input" name="form_morfo" type="radio" value="muy_delgada" id="muy_delgada" required>
                            <label class="form-check-label" for="muy_delgada">
                                <div class="spanish">Muy delgada // </div>
                                <div class="space"> </div>
                                <div class="french">très mince</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_morfo" type="radio" value="delgada" id="delgada">
                            <label class="form-check-label" for="delgada">
                                <div class="spanish">Delgada // </div>
                                <div class="space"> </div>
                                <div class="french">mince</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_morfo" type="radio" value="normal" id="normal">
                            <label class="form-check-label" for="normal">
                                <div class="spanish">Normal // </div>
                                <div class="space"> </div>
                                <div class="french">normal</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_morfo" type="radio" value="atletica" id="atletica">
                            <label class="form-check-label" for="atletica">
                                <div class="spanish">Atlética // </div>
                                <div class="space"> </div>
                                <div class="french">athlétique</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_morfo" type="radio" value="gruesa" id="gruesa">
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
                            <input class="form-check-input" name="form_hair_color" type="radio" value="rubio" id="rubio" required>
                            <label class="form-check-label" for="rubio">
                                <div class="spanish">Rubio // </div>
                                <div class="space"> </div>
                                <div class="french">blond</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_hair_color" type="radio" value="castano_claro" id="castano_claro">
                            <label class="form-check-label" for="castano_claro">
                                <div class="spanish">Castaño claro // </div>
                                <div class="space"> </div>
                                <div class="french">châtain clair</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_hair_color" type="radio" value="castano_oscuro" id="castano_oscuro">
                            <label class="form-check-label" for="castano_oscuro">
                                <div class="spanish">Castaño oscuro // </div>
                                <div class="space"> </div>
                                <div class="french">marron foncé</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_hair_color" type="radio" value="negro" id="negro">
                            <label class="form-check-label" for="negro">
                                <div class="spanish">Negro // </div>
                                <div class="space"> </div>
                                <div class="french">noir</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_hair_color" type="radio" value="pelirrojo" id="pelirrojo">
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
                            <input class="form-check-input" name="form_hair_type" type="radio" value="liso" id="liso" required>
                            <label class="form-check-label" for="liso">
                                <div class="spanish">Liso // </div>
                                <div class="space"> </div>
                                <div class="french">lisse</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_hair_type" type="radio" value="ondulado" id="ondulado">
                            <label class="form-check-label" for="ondulado">
                                <div class="spanish">Ondulado // </div>
                                <div class="space"> </div>
                                <div class="french">frisé</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_hair_type" type="radio" value="fino" id="fino">
                            <label class="form-check-label" for="fino">
                                <div class="spanish">Fino // </div>
                                <div class="space"> </div>
                                <div class="french">fin</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_hair_type" type="radio" value="grueso" id="grueso">
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
                            <input class="form-check-input" name="form_face_shape" type="radio" value="ovalada" id="ovalada" required>
                            <label class="form-check-label" for="ovalada">
                                <div class="spanish">Ovalada // </div>
                                <div class="space"> </div>
                                <div class="french">ovale</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_face_shape" type="radio" value="redonda" id="redonda">
                            <label class="form-check-label" for="redonda">
                                <div class="spanish">Redonda // </div>
                                <div class="space"> </div>
                                <div class="french">ronde</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_face_shape" type="radio" value="alargada" id="alargada">
                            <label class="form-check-label" for="alargada">
                                <div class="spanish">Alargada // </div>
                                <div class="space"> </div>
                                <div class="french">allongé</div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="form_face_shape" type="radio" value="cuadrada" id="cuadrada">
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