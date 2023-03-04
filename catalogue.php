<?php
include 'includes/templates/header.php';
include "includes/app.php";
// if (!$_SESSION['login']) {
//     header('location: /index.php');
// } else {
//     if (!($_SESSION['type'] === 'user' || $_SESSION['type'] === 'admin' || $_SESSION['type'] === 'admin-jr') || $_SESSION['type'] === 'donant') {
//         header('location: /index.php');
//     }
// }
$db = new mysqli(
        $_ENV['DB_HOST'],
        $_ENV['DB_USER'],
        $_ENV['DB_PASS'] ?? '',
        $_ENV['DB_BD']);

    
$sql = "SELECT * FROM donants";
$result = mysqli_query($db, $sql);
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
    $ext_img_1 = $row['ext_img_1'];
    $ext_img_2 = $row['ext_img_2'];
    $ext_img_3 = $row['ext_img_3'];
    $ext_img_4 = $row['ext_img_4'];
}
$idUser = $_SESSION['id'];
$codeUser = $_SESSION['code'];
$query = "SELECT * FROM users WHERE id='{$idUser}'";
$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $codeR1 = $row['donant_1'];
}
$query = "SELECT donant_2 FROM users WHERE id='{$idUser}'";
$result2 = mysqli_query($db, $query);
while ($row = mysqli_fetch_assoc($result2)) {
    $codeR2 = $row['donant_2'];
}
$query = "SELECT donant_3 FROM users WHERE id='{$idUser}'";
$result3 = mysqli_query($db, $query);
while ($row = mysqli_fetch_assoc($result3)) {
    $codeR3 = $row['donant_3'];
}
$codeUser = $_SESSION['code'];
$query = "SELECT * FROM donants WHERE code='{$codeUser}'";
$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $codeUserId = $row['id'];
}
?>

<main class="register">
    <div class="register-info">
        <h3>Catálogo</h3>
    </div>
    <?php if (isset($codeUser)) {
        if (!($codeUser === "" || $codeUser === "-")) { ?>
            <div class="menu-users">
                <div class="create-user">
                    <a href=<?php echo "donantFenotipe.php?id=" . $codeUserId ?>>Ver fenotipo <?php echo $codeUser; ?></a>
                </div>
            </div>
    <?php }
    } ?>
    <?php if (isset($_GET['msg'])) { ?>
        <p class="error"><?php echo $_GET['msg']; ?></p>
    <?php } ?>
    <!-- <div class="esthetics-options"> -->
    <?php if ($_SESSION['vip'] === "0" && $_SESSION['plus'] === "0" && $_SESSION['elite'] === "0" && (!(isset($codeUser)) || $codeUser === "-")) { 
        header('location: phenotypeFIle.php');
     } ?>
    <!-- 
        <div class="esthetics-options-grid">
            <?php if ($_SESSION['vip'] === "1") { ?>
                <a href="vip.php" class="esthetics-options-treatments">
                    <div class="esthetics-options-img">
                        <img src="build/img/admin/users.webp" alt="donants" />
                    </div>
                    <div class="esthetics-options-bg">
                        <div class="esthetics-title">
                            <h2>VIP<br /> <span></span></h2>
                        </div>
                    </div>
                </a>
            <?php } ?>
            <?php if ($_SESSION['plus'] === "1") { ?>
                <a href="plus.php" class="esthetics-packages">
                    <div class="esthetics-options-img">
                        <img src="build/img/admin/users.webp" alt="users" />
                    </div>
                    <div class="esthetics-options-bg">
                        <div class="esthetics-title">
                            <h2>Plus<br /> <span></span></h2>
                        </div>
                    </div>
                </a>
            <?php } ?>
            <?php if ($_SESSION['elite'] === "1") { ?>
                <a href="elite.php" class="esthetics-packages">
                    <div class="esthetics-options-img">
                        <img src="build/img/admin/users.webp" alt="users" />
                    </div>
                    <div class="esthetics-options-bg">
                        <div class="esthetics-title">
                            <h2>Elite<br /> <span></span></h2>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div> -->
    <div class="catalogue">
        <div id="myBtnContainer">
            <?php if ($_SESSION['plus'] === "1") { ?>
                <button class="btn catalogue-btn" onclick="filterSelection('plus')"> Plus</button>
            <?php } ?>
            <?php if ($_SESSION['vip'] === "1") { ?>
                <button class="btn catalogue-btn" onclick="filterSelection('vip')"> VIP</button>
            <?php } ?>
            <?php if ($_SESSION['elite'] === "1") { ?>
                <button class="btn catalogue-btn" onclick="filterSelection('elite')"> Elite</button>
            <?php } ?>
        </div>

        <!-- Portfolio Gallery Grid -->
        <div class="row">
            <?php for ($i = 1; $i <= $index; $i++) { ?>
                <?php if ($profile[$i] === "Plus") { ?>
                    <a href="donantPlus.php?id=<?php echo $id[$i]; ?>" class="column plus">
                        <div class="content">
                            <div class="catalogue-img-container">
                                <img class="catalogue-img" src=<?php echo $ext_img_1 ?> alt="picture">
                            </div>
                            <h4>ID: <?php echo $code[$i] ?></h4>
                            <p><?php echo $nationality[$i] ?></p>
                            <?php if ($codeR1 === $code[$i] || $codeR2 === $code[$i] || $codeR3 === $code[$i]) { ?>
                                <form class="form-select-btn" action="registerDonant.php" method="POST">
                                    <input type="hidden" name="code" value="<?php echo $code[$i] ?>">
                                    <button class="submit-disabled" type="submit" disabled>Seleccionada</button>
                                </form>
                            <?php } else { ?>
                                <form class="form-select-btn" action="registerDonant.php" method="POST">
                                    <input type="hidden" name="code" value="<?php echo $code[$i] ?>">
                                    <button class="submit-ok" onclick="return confirm('¿Deseas registrar a la donante?')" type="submit">Seleccionar</button>
                                </form>
                            <?php } ?>
                        </div>
                    </a>
                <?php } ?>
                <?php if ($profile[$i] === "VIP") { ?>
                    <a href="donantVIP.php?id=<?php echo $id[$i]; ?>" class="column vip">
                        <div class="content">
                            <div class="catalogue-img-container">
                                <img class="catalogue-img" src=<?php echo $ext_img_1 ?> alt="picture">
                            </div>
                            <h4>ID: <?php echo $code[$i] ?></h4>
                            <p><?php echo $nationality[$i] ?></p>
                            <?php if ($codeR1 === $code[$i] || $codeR2 === $code[$i] || $codeR3 === $code[$i]) { ?>
                                <form class="form-select-btn" action="registerDonant.php" method="POST">
                                    <input type="hidden" name="code" value="<?php echo $code[$i] ?>">
                                    <button class="submit-disabled" type="submit" disabled>Seleccionada</button>
                                </form>
                            <?php } else { ?>
                                <form class="form-select-btn" action="registerDonant.php" method="POST">
                                    <input type="hidden" name="code" value="<?php echo $code[$i] ?>">
                                    <button class="submit-ok" onclick="return confirm('¿Deseas registrar a la donante?')" type="submit">Seleccionar</button>
                                </form>
                            <?php } ?>
                        </div>
                    </a>
                <?php } ?>
                <?php if ($profile[$i] === "Elite") { ?>
                    <a href="donantElite.php?id=<?php echo $id[$i]; ?>" class="column elite">
                        <div class="content">
                            <div class="catalogue-img-container">
                                <img class="catalogue-img" src=<?php echo $ext_img_1 ?> alt="picture">
                            </div>
                            <h4>ID: <?php echo $code[$i] ?></h4>
                            <p><?php echo $nationality[$i] ?></p>
                            <?php if ($codeR1 === $code[$i] || $codeR2 === $code[$i] || $codeR3 === $code[$i]) { ?>
                                <form class="form-select-btn" action="registerDonant.php" method="POST">
                                    <input type="hidden" name="code" value="<?php echo $code[$i] ?>">
                                    <button class="submit-disabled" type="submit" disabled>Seleccionada</button>
                                </form>
                            <?php } else { ?>
                                <form class="form-select-btn" action="registerDonant.php" method="POST">
                                    <input type="hidden" name="code" value="<?php echo $code[$i] ?>">
                                    <button class="submit-ok" onclick="return confirm('¿Deseas registrar a la donante?')" type="submit">Seleccionar</button>
                                </form>
                            <?php } ?>
                        </div>
                    </a>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <div class="menu-users">
        <div class="logout">
            <a href="logout.php">
                Cerrar sesión
            </a>
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
</body>

</html>