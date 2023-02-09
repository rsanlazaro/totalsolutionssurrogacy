<?php
include 'includes/templates/header.php';
?>
<?php
include "includes/config/database.php";

if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'ADMIN')) {
        header('location: /index.php');
    }
}

$conn = connectDB();
// When form submitted, insert values into the database.
if (isset($_REQUEST['nationality'])) {
    $code = stripslashes($_REQUEST['code']);
    $code = mysqli_real_escape_string($conn, $code);
    $sql = "SELECT * FROM donants WHERE code='${code}'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows>0){
        header('location: /registrationDonant.php?El código de identificación ya ha sido registrado. Por favor, seleccione otro');
    } 
    
    // Upload image
    if (isset($_FILES['image-1']) && isset($_FILES['image-2']) && isset($_FILES['image-3']) && isset($_FILES['image-4'])) {
        $file = $_FILES['image-1']['name'];
        $file2 = $_FILES['image-2']['name'];
        $file3 = $_FILES['image-3']['name'];
        $file4 = $_FILES['image-4']['name'];
        $path = pathinfo($file);
        $path2 = pathinfo($file2);
        $path3 = pathinfo($file3);
        $path4 = pathinfo($file4);
        $ext = $path['extension'];
        $ext2 = $path2['extension'];
        $ext3 = $path3['extension'];
        $ext4 = $path4['extension'];
        $_FILES['image-1']['name'] = $_REQUEST['code'] . "_1." . $ext;
        $_FILES['image-2']['name'] = $_REQUEST['code'] . "_2." . $ext;
        $_FILES['image-3']['name'] = $_REQUEST['code'] . "_3." . $ext;
        $_FILES['image-4']['name'] = $_REQUEST['code'] . "_4." . $ext;
        move_uploaded_file($_FILES['image-1']['tmp_name'], "build/img/admin/donants/" . $_FILES['image-1']['name']);
        move_uploaded_file($_FILES['image-2']['tmp_name'], "build/img/admin/donants/" . $_FILES['image-2']['name']);
        move_uploaded_file($_FILES['image-3']['tmp_name'], "build/img/admin/donants/" . $_FILES['image-3']['name']);
        move_uploaded_file($_FILES['image-4']['tmp_name'], "build/img/admin/donants/" . $_FILES['image-4']['name']);
    }
    // removes backslashes
    $nationality = stripslashes($_REQUEST['nationality']);
    $nationality = mysqli_real_escape_string($conn, $nationality);
    $date_birth    = stripslashes($_REQUEST['date_birth']);
    $date_birth    = mysqli_real_escape_string($conn, $date_birth);
    $color_eyes = stripslashes($_REQUEST['color_eyes']);
    $color_eyes = mysqli_real_escape_string($conn, $color_eyes);
    $color_skin = stripslashes($_REQUEST['color_skin']);
    $color_skin = mysqli_real_escape_string($conn, $color_skin);
    $blood_type = stripslashes($_REQUEST['blood_type']);
    $blood_type = mysqli_real_escape_string($conn, $blood_type);
    $height = stripslashes($_REQUEST['height']);
    $height = mysqli_real_escape_string($conn, $height);
    $weight = stripslashes($_REQUEST['weight']);
    $weight = mysqli_real_escape_string($conn, $weight);
    $education = stripslashes($_REQUEST['education']);
    $education = mysqli_real_escape_string($conn, $education);
    $color_hair = stripslashes($_REQUEST['color_hair']);
    $color_hair = mysqli_real_escape_string($conn, $color_hair);
    $type_hair = stripslashes($_REQUEST['type_hair']);
    $type_hair = mysqli_real_escape_string($conn, $type_hair);
    $type_body = stripslashes($_REQUEST['type_body']);
    $type_body = mysqli_real_escape_string($conn, $type_body);
    $ocupation = stripslashes($_REQUEST['ocupation']);
    $ocupation = mysqli_real_escape_string($conn, $ocupation);
    $profile = stripslashes($_REQUEST['profile']);
    $profile = mysqli_real_escape_string($conn, $profile);
    date_default_timezone_set('America/Mexico_City');
    $create_datetime = date("y-m-d G:i:s");
    $query    = "INSERT into `donants` (nationality, date_birth, color_eyes, color_skin, blood_type, height, weight, education, color_hair, type_hair, type_body, ocupation, profile, code)
                    VALUES ('$nationality', '" . $date_birth . "', '$color_eyes', '$color_skin', '$blood_type', '$height', '$weight', '$education', '$color_hair', '$type_hair', '$type_body', '$ocupation', '$profile', '$code')";
    $result   = mysqli_query($conn, $query);
    if ($result) {
        header("Location: donants.php?msg=El usuario se ha creado exitosamente");
    } else {
        header("Location: donants.php?msg=Hubo un problema registrando al usuario. Por favor, intente nuevamente");
    }
} else {
?>
    <main class="register">
        <div class="register-info">
            <h3>Ingresar información de donante</h3>
        </div>
        <div class="register-form new-user">
            <div class="form-body">
                <div class="contact-form">
                    <h2 class="contact-form-title">Nuevo donante</h1>
                        <form class="form" action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <label for="validationCustom01">Código de identificación</label>
                                <input type="text" class="form-control" id="validationCustom01" name="code" required />
                                <div class="invalid-feedback">
                                    <div>Ingrese el código de identificación</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom01">Nacionalidad</label>
                                <input type="text" class="form-control" id="validationCustom01" name="nationality" required  />
                                <div class="invalid-feedback">
                                    <div>Ingrese la nacionalidad</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="has-validation">
                                    <label class="label-form" for="validationCustomUsername">Año de nacimiento</label>
                                    <input type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="date_birth" required  />
                                    <div class="invalid-feedback">
                                        <div>Ingrese el año de nacimiento</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="has-validation">
                                    <label class="label-form" for="validationCustomUsername">Color de ojos</label>
                                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="color_eyes"  required />
                                    <div class="invalid-feedback">
                                        <div>Ingrese el color de ojos</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="has-validation">
                                    <label class="label-form" for="validationCustomUsername">Color de piel</label>
                                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="color_skin" required  />
                                    <div class="invalid-feedback">
                                        <div>Ingrese el color de piel</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="has-validation">
                                    <label class="label-form" for="validationCustomUsername">Tipo de sangre</label>
                                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="blood_type" required  />
                                    <div class="invalid-feedback">
                                        <div>Ingrese el tipo de sangre</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="has-validation">
                                    <label class="label-form" for="validationCustomUsername">Altura (m)</label>
                                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="height" required  />
                                    <div class="invalid-feedback">
                                        <div>Ingrese la altura</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="has-validation">
                                    <label class="label-form" for="validationCustomUsername">Peso (kg)</label>
                                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="weight" required  />
                                    <div class="invalid-feedback">
                                        <div>Ingrese el peso</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="has-validation">
                                    <label class="label-form" for="validationCustomUsername">Nivel educativo</label>
                                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="education"  required />
                                    <div class="invalid-feedback">
                                        <div>Ingrese el nivel educativo</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="has-validation">
                                    <label class="label-form" for="validationCustomUsername">Color de cabello</label>
                                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="color_hair" required  />
                                    <div class="invalid-feedback">
                                        <div>Ingrese el color de cabello</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="has-validation">
                                    <label class="label-form" for="validationCustomUsername">Tipo de cabello</label>
                                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="type_hair" required  />
                                    <div class="invalid-feedback">
                                        <div>Ingrese el tipo de cabello</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="has-validation">
                                    <label class="label-form" for="validationCustomUsername">Tipo de cuerpo</label>
                                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="type_body"  required />
                                    <div class="invalid-feedback">
                                        <div>Ingrese el tipo de cuerpo</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="has-validation">
                                    <label class="label-form" for="validationCustomUsername">Ocupación</label>
                                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="ocupation" required  />
                                    <div class="invalid-feedback">
                                        <div>Ingrese la ocupación</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="has-validation">
                                    <label class="label-form" for="type-select">Perfil</label>
                                    <div class="form-control">
                                        <select name="profile" class="selector" id="type-select" required >
                                            <option value="VIP">VIP</option>
                                            <option value="Plus">Plus</option>
                                            <option value="Elite">Elite</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback">
                                        <div>Seleccione una opción</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="has-validation">
                                    <label class="label-form" for="validationCustomUsername">Imagen 1:</label>
                                    <input type="file" onchange="previewFile()" class="form-control img-1-input" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="image-1" value="build/img/admin/donants/PLUS-001_2.png"  />
                                    <img class="img-1-pre" src="" height="200" alt="Image preview...">
                                    <div class="invalid-feedback">
                                        <div>Seleccione una imagen</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="has-validation">
                                    <label class="label-form" for="validationCustomUsername">Imagen 2:</label>
                                    <input type="file" onchange="previewFile2()" class="form-control img-2-input" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="image-2" value="build/img/admin/donants/PLUS-001_2.png"  />
                                    <img class="img-2-pre" src="" height="200" alt="Image preview...">
                                    <div class="invalid-feedback">
                                        <div>Seleccione una imagen</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="has-validation">
                                    <label class="label-form" for="validationCustomUsername">Imagen 3:</label>
                                    <input type="file" onchange="previewFile3()" class="form-control img-3-input" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="image-3" value="build/img/admin/donants/PLUS-001_2.png"  />
                                    <img class="img-3-pre" src="" height="200" alt="Image preview...">
                                    <div class="invalid-feedback">
                                        <div>Seleccione una imagen</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="has-validation">
                                    <label class="label-form" for="validationCustomUsername">Imagen 4:</label>
                                    <input type="file" onchange="previewFile4()" class="form-control img-4-input" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="image-4" value="build/img/admin/donants/PLUS-001_2.png"  />
                                    <img class="img-4-pre" src="" height="200" alt="Image preview...">
                                    <div class="invalid-feedback">
                                        <div>Seleccione una imagen</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button class="btn btn-send" type="submit">
                                    <div>Crear perfil de donante</div>
                                </button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </main>
<?php } ?>
<script src="build/js/bundle.min.js"></script>
</body>

</html>