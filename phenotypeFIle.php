<?php
include 'includes/templates/header.php';
include "includes/app.php";
include 'includes/functions.php';
// estaAutenticado();
if (!($_SESSION['login'])) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'donant')) {
        header('location: /index.php');
    }
}
?>
<main>
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
                <input type="text" class="form-control-phenotype" id="validationCustom01" name="code" required />
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
                <input type="text" class="form-control-phenotype" id="validationCustom01" name="nationality" required />
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
                <input type="text" class="form-control-phenotype" id="validationCustom01" name="code" required />
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
                <input type="text" class="form-control-phenotype" id="validationCustom01" name="code" required />
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
                <input type="text" class="form-control-phenotype" id="validationCustom01" name="code" required />
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
                        <input class="form-check-input" name="race" type="radio" value="" id="caucasico">
                        <label class="form-check-label" for="caucasico">
                            <div class="spanish">Caucásico blanco // </div>
                            <div class="space"> </div>
                            <div class="french">caucasien/blanc</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="race" type="radio" value="" id="arabe">
                        <label class="form-check-label" for="arabe">
                            <div class="spanish">Árabe/Berbere (África del norte, medio oriente) // </div>
                            <div class="space"> </div>
                            <div class="french">Arabe/Berbère (Afrique du Nord, Moyen-Orient)</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="race" type="radio" value="" id="indoario">
                        <label class="form-check-label" for="indoario">
                            <div class="spanish">Indoario (Subcontinente indio) // </div>
                            <div class="space"> </div>
                            <div class="french">Indo-aryen (sous-continent indien)</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="race" type="radio" value="" id="amarillo">
                        <label class="form-check-label" for="amarillo">
                            <div class="spanish">Amarillo (Extreme oriente Asia) // </div>
                            <div class="space"> </div>
                            <div class="french">Jaune (Extrême-Orient)</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="race" type="radio" value="" id="turco">
                        <label class="form-check-label" for="turco">
                            <div class="spanish">Túrquico (Asia central) // </div>
                            <div class="space"> </div>
                            <div class="french">Turc (Asie centrale)</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="race" type="radio" value="" id="negro">
                        <label class="form-check-label" for="negro">
                            <div class="spanish">Negro/Mulato (Africa subsahariana) // </div>
                            <div class="space"> </div>
                            <div class="french">Noir/Mulâtre (Afrique subsaharienne)</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="race" type="radio" value="" id="amerindio">
                        <label class="form-check-label" for="amerindio">
                            <div class="spanish">Amerindio (Continente suramericano) // </div>
                            <div class="space"> </div>
                            <div class="french">Amérindien (Continent sud-américain)</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="race" type="radio" value="" id="mestizos">
                        <label class="form-check-label" for="mestizos">
                            <div class="spanish">Mestizos (híbrido-racial) // </div>
                            <div class="space"> </div>
                            <div class="french">Métis (hybride-racial)</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="race" type="radio" value="" id="austronesia">
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
                        <input class="form-check-input" name="skin" type="radio" value="" id="caucasico">
                        <label class="form-check-label" for="caucasico">
                            <div class="spanish">Muy pálida // </div>
                            <div class="space"> </div>
                            <div class="french">très pâle</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="skin" type="radio" value="" id="arabe">
                        <label class="form-check-label" for="arabe">
                            <div class="spanish">Blanca // </div>
                            <div class="space"> </div>
                            <div class="french">blanche</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="skin" type="radio" value="" id="indoario">
                        <label class="form-check-label" for="indoario">
                            <div class="spanish">Mate // </div>
                            <div class="space"> </div>
                            <div class="french">matte</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="skin" type="radio" value="" id="amarillo">
                        <label class="form-check-label" for="amarillo">
                            <div class="spanish">Muy mate // </div>
                            <div class="space"> </div>
                            <div class="french">très matte</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="skin" type="radio" value="" id="turco">
                        <label class="form-check-label" for="turco">
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
                        <input class="form-check-input" name="eyes" type="radio" value="" id="caucasico">
                        <label class="form-check-label" for="caucasico">
                            <div class="spanish">Gris // </div>
                            <div class="space"> </div>
                            <div class="french">gris</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="eyes" type="radio" value="" id="arabe">
                        <label class="form-check-label" for="arabe">
                            <div class="spanish">Azul // </div>
                            <div class="space"> </div>
                            <div class="french">bleu</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="eyes" type="radio" value="" id="indoario">
                        <label class="form-check-label" for="indoario">
                            <div class="spanish">Verde // </div>
                            <div class="space"> </div>
                            <div class="french">vert</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="eyes" type="radio" value="" id="amarillo">
                        <label class="form-check-label" for="amarillo">
                            <div class="spanish">Marrón Claro // </div>
                            <div class="space"> </div>
                            <div class="french">marrons claire</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="eyes" type="radio" value="" id="turco">
                        <label class="form-check-label" for="turco">
                            <div class="spanish">Marrón Oscuro // </div>
                            <div class="space"> </div>
                            <div class="french">marrons foncé</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="eyes" type="radio" value="" id="turco">
                        <label class="form-check-label" for="turco">
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
                        <input class="form-check-input" name="morphology" type="radio" value="" id="caucasico">
                        <label class="form-check-label" for="caucasico">
                            <div class="spanish">Muy delgada // </div>
                            <div class="space"> </div>
                            <div class="french">très mince</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="morphology" type="radio" value="" id="arabe">
                        <label class="form-check-label" for="arabe">
                            <div class="spanish">Delgada // </div>
                            <div class="space"> </div>
                            <div class="french">mince</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="morphology" type="radio" value="" id="indoario">
                        <label class="form-check-label" for="indoario">
                            <div class="spanish">Normal // </div>
                            <div class="space"> </div>
                            <div class="french">normal</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="morphology" type="radio" value="" id="amarillo">
                        <label class="form-check-label" for="amarillo">
                            <div class="spanish">Atlética // </div>
                            <div class="space"> </div>
                            <div class="french">athlétique</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="morphology" type="radio" value="" id="turco">
                        <label class="form-check-label" for="turco">
                            <div class="spanish">Gruesa/Robusta // </div>
                            <div class="space"> </div>
                            <div class="french">épais/robuste</div>
                        </label>
                    </div>
                </div>
                <div class="form-grid-element">
                    <div class="form-subtitle-grid form-white">
                        <div class="spanish">Cabello (color y tipo): </div>
                        <div class="french">Cheveux (couleur et type) </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="hair" type="radio" value="" id="caucasico">
                        <label class="form-check-label" for="caucasico">
                            <div class="spanish">Rubio // </div>
                            <div class="space"> </div>
                            <div class="french">blond</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="hair" type="radio" value="" id="arabe">
                        <label class="form-check-label" for="arabe">
                            <div class="spanish">Castaño claro // </div>
                            <div class="space"> </div>
                            <div class="french">châtain clair</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="hair" type="radio" value="" id="indoario">
                        <label class="form-check-label" for="indoario">
                            <div class="spanish">Castaño oscuro // </div>
                            <div class="space"> </div>
                            <div class="french">marron foncé</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="hair" type="radio" value="" id="amarillo">
                        <label class="form-check-label" for="amarillo">
                            <div class="spanish">Negro // </div>
                            <div class="space"> </div>
                            <div class="french">noir</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="hair" type="radio" value="" id="turco">
                        <label class="form-check-label" for="turco">
                            <div class="spanish">Pelirrojo // </div>
                            <div class="space"> </div>
                            <div class="french">roux</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="hair" type="radio" value="" id="turco">
                        <label class="form-check-label" for="turco">
                            <div class="spanish">Liso // </div>
                            <div class="space"> </div>
                            <div class="french">lisse</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="hair" type="radio" value="" id="turco">
                        <label class="form-check-label" for="turco">
                            <div class="spanish">Ondulado // </div>
                            <div class="space"> </div>
                            <div class="french">frisé</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="hair" type="radio" value="" id="turco">
                        <label class="form-check-label" for="turco">
                            <div class="spanish">Fino // </div>
                            <div class="space"> </div>
                            <div class="french">fin</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="hair" type="radio" value="" id="turco">
                        <label class="form-check-label" for="turco">
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
                        <input class="form-check-input" name="face" type="radio" value="" id="caucasico">
                        <label class="form-check-label" for="caucasico">
                            <div class="spanish">Ovalada // </div>
                            <div class="space"> </div>
                            <div class="french">ovale</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="face" type="radio" value="" id="arabe">
                        <label class="form-check-label" for="arabe">
                            <div class="spanish">Redonda // </div>
                            <div class="space"> </div>
                            <div class="french">ronde</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="face" type="radio" value="" id="indoario">
                        <label class="form-check-label" for="indoario">
                            <div class="spanish">Alargada // </div>
                            <div class="space"> </div>
                            <div class="french">allongé</div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="face" type="radio" value="" id="amarillo">
                        <label class="form-check-label" for="amarillo">
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
            <textarea class="form-control-phenotype-msg" id="validationTextarea" required></textarea>
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
                <input type="text" class="form-control-phenotype" id="validationCustom01" name="code" required />
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
</main>