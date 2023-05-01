<?php
include 'includes/templates/header.php';
include "includes/app.php";
if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'admin' || $_SESSION['type'] === 'admin-jr')) {
        header('location: /index.php');
    }
}
$conn = connectDB();


$sql = "SELECT * FROM donants";
$result = mysqli_query($conn, $sql);
$index = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $id[++$index] = $row['id'];
    $nationality[$index] = $row['nationality'];
    $date_birth[$index] = $row['date_birth'];
    $color_eyes[$index] = $row['color_eyes'];
    $color_skin[$index] = $row['color_skin'];
    $blood_type[$index] = $row['blood_type'];
    $height[$index] = $row['height'];
    $weight[$index] = $row['weight'];
    $education[$index] = $row['education'];
    $color_hair[$index] = $row['color_hair'];
    $type_hair[$index] = $row['type_hair'];
    $type_body[$index] = $row['type_body'];
    $ocupation[$index] = $row['ocupation'];
    $profile[$index] = $row['profile'];
    $code[$index] = $row['code'];
    $code_img[$index] = $row['code_img'];
    $ext_img_1[$index] = $row['ext_img_1'];
    $ext_img_2[$index] = $row['ext_img_2'];
    $ext_img_3[$index] = $row['ext_img_3'];
    $ext_img_4[$index] = $row['ext_img_4'];
}
// $profile == "Fenotipe";
$idUser = $_SESSION['id'];
$codeUser = $_SESSION['code'];
$query = "SELECT * FROM users WHERE id='${idUser}'";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $codeR1 = $row['donant_1'];
}
$query = "SELECT donant_2 FROM users WHERE id='${idUser}'";
$result2 = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result2)) {
    $codeR2 = $row['donant_2'];
}
$query = "SELECT donant_3 FROM users WHERE id='${idUser}'";
$result3 = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result3)) {
    $codeR3 = $row['donant_3'];
}
$codeUser = $_SESSION['code'];
$query = "SELECT * FROM donants WHERE code='${codeUser}'";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $codeUserId = $row['id'];
}
?>

<main class="register">
    <div class="register-info">
        <h3>Fenotipos</h3>
    </div>
    <div class="menu-users">
        <div class="logout">
            <a href="logout.php">
                Cerrar sesión
            </a>
        </div>
    </div>
    <div class="catalogue catalogue-phenotype">
        <!-- Portfolio Gallery Grid -->
        <div class="row">
            <?php for ($i = 1; $i <= $index; $i++) { ?>
                <?php if ($profile[$i] === "Fenotipe") { ?>
                    <a href="donantFenotipe.php?id=<?php echo $id[$i]; ?>" class="column plus">
                        <div class="content">
                            <div class="catalogue-img-container">
                                <img class="catalogue-img" src=<?php if ($ext_img_1[$i] !== "-") {
                                                                    echo $ext_img_1[$i];
                                                                } else {
                                                                    echo "build/img/admin/phenotype.webp";
                                                                }  ?> alt="picture">
                            </div>
                            <h4>ID: <?php echo $code[$i] ?></h4>
                            <p><?php echo $nationality[$i] ?></p>
                        </div>
                    </a>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</main>

<script type="text/javascript">
    <?php if ($_SESSION['elite'] == '1') { ?>
        filterSelection("elite");
    <?php } ?>
    <?php if ($_SESSION['vip'] == '1') { ?>
        filterSelection("vip");
    <?php } ?>
    <?php if ($_SESSION['plus'] == '1') { ?>
        filterSelection("plus");
    <?php } ?>
    <?php if ($_SESSION['fenotipe'] == '1') { ?>
        filterSelection("fenotipe");
    <?php } ?>

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    // Show filtered elements
    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    // Hide elements that are not selected
    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }

    function checkDelete() {
        return confirm('Are you sure?');
    }
</script>
<?php include 'includes/templates/footer.php'; ?>