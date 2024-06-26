<?php
include 'includes/templates/header.php';
$prenancy_num = 2;
?>
<main>
    <?php if (isset($_GET['msg'])) { ?>
        <p class="error"><?php echo $_GET['msg']; ?></p>
    <?php } else { ?>
        <div class="form-header">
            <div class="form-header-logo">
                <img src="build/img/icons/TotalSolutionsSurrogacyWhite.webp" alt="EggDonor">
            </div>
            <div class="form-header-title form-white">
                <div class="spanish">
                    Ficha de registro para gestante
                </div>
            </div>
        </div>
        <form class="form form-phenotype" action="form3.php" method="post" enctype="multipart/form-data">
            <table class="responsive-table myTable table hover" id="myTable">
                <thead>
                    <tr class="thead">
                        <th>Antecedente</th>
                        <th>Ninguno</th>
                        <th>Madre</th>
                        <th>Padre</th>
                        <th>Abuelos maternos</th>
                        <th>Abuelos paternos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-title="Contraseña"> Alergias </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Apoplejía </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Cardiopatía </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Cataratas </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Cirrosis </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Desorden convulsivo </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Distrofia muscular </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Enfisema </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Epilepsia </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Glaucoma </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Hemofilia </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Ictericia </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Migraña </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Varicocele </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Pie equinovaro </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Retraso mental </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Uso de drogas </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Esquizofrenia </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Alcoholismo </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Diabetes juvenil </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Bocio </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Ceguera </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Daltonismo </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Diabetes </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Enfermedad psiquiátrica </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Endometriosis </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Fibrosis quística </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Gota </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Hipertensión </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Labio/Paladar Hendido </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Crisis Renales </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Circulación </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Psoriasis </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Sordera </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Alzheimer </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Parkinson </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Contraseña">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-btn btn-arrange">
                <button class="btn btn-send" id="return2">
                    <div>Anterior</div>
                </button>
                <button class="btn btn-send" type="submit">
                    <div>Finalizar</div>
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
<script src="build/js/form3.min.js"></script>