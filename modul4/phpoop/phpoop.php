<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deltaker-registrering - rlo012</title>
    <link type="text/css" rel="stylesheet" href="../../css/style.css"/>
    <script type="text/javascript" src="js/init.js"></script>
    <script type="text/javascript" src="/~rlo012/js/scripts.js"></script>
</head>
<body>

<?php
include('../../nav.html');
require_once('Deltaker.class.php');
?>
<script>
    window.onload = fixHrefs(<?php $_SERVER['REQUEST_URI'] ?>);
    document.getElementsByClassName("page-title")[0].innerHTML = "Konferansen IKT";
    document.getElementById("modul4").classList.add("active-top");
</script>

<?php




$minFodselsAar = date('Y') - 80;
$maxFodselsAar = date('Y') - 10;

if ($_SERVER['REQUEST_METHOD'] == "POST" && is_numeric($_POST['fodselsAar']) && !empty($_POST['forNavn']) && !empty($_POST['etterNavn']) && !empty($_POST['yrker'])) {

    $now = date('Y');
    $forNavn   = parse($_POST['forNavn']);
    $etterNavn   = parse($_POST['etterNavn']);
    $fodselsAar = parse($_POST['fodselsAar']);
    $yrke = parse($_POST['yrker']);
    $age = date('Y') - $fodselsAar;
    if (date('M') < 6) { $age -= 1;}

    require_once('Deltaker.class.php');
    $deltaker = new Deltaker($forNavn, $etterNavn, $age, $yrke);

    echo "<div class='container'><h3>Velkommen, " . $deltaker->hentForNavn() . " " . $deltaker->hentEtterNavn()  . "!</h3>";
    setlocale(LC_TIME, 'no_NO');
    echo "<p>Du ble registrert " . utf8_encode(strftime("%A %d/%m/%Y kl. %H:%M")) . ".</p>";
    echo "<p>Din alder er sannsynligvis " . $deltaker->hentFAar() . ".</p>";
    echo "<p>Ditt yrke er: " . $deltaker->hentYrke() . ".</p></div>";

}

else {

    ?>

    <div class="container">
        <h2 class="form-title">Registrering</h2>
        <form name="registrering" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onSubmit="return validateForm()">
            <label for="forNavn">Fornavn</label>
            <input type="text" name="forNavn" id="forNavn" placeholder="Ditt fornavn..." value="<?php echo isset($_POST['forNavn']) ? htmlentities($_POST['forNavn']) : '' ?>" onfocus="clearErrors(this)" onchange="validateForm(this)" onblur="validateForm(this)" />

            <label for="etterNavn">Etternavn</label>
            <input type="text" name="etterNavn" id="etterNavn" placeholder ="Ditt etternavn..." value="<?php echo isset($_POST['etterNavn']) ? htmlentities($_POST['etterNavn']) : '' ?>" onfocus="clearErrors(this)" onchange="validateForm(this)" onblur="validateForm(this)" />

            <label for="fodselsAar">Fødselsår</label>
            <input type="number" name ="fodselsAar" id ="fodselsAar" min="<?php echo $minFodselsAar ?>" max="<?php echo $maxFodselsAar ?>" placeholder="Ditt fødselsår" value="<?php echo isset($_POST['fodselsAar']) ? htmlentities($_POST['fodselsAar']) : '' ?>" onfocus="clearErrors(this)" onchange="validateForm(this)" onblur="validateForm(this)"  >

            <label for="yrker">Yrke</label>
            <?php
            echo "<select id='yrker' name='yrker' onfocus='clearErrors(this)' onblur='validateForm(this)' onchange'validateForm(this)' ><option value='' hidden disabled selected></option>";
            $yrkeArr = array("Snekker", "Advokat", "Vaskehjelp", "Sykepleier", "Professor", "Heismontør");
            asort($yrkeArr);
            foreach($yrkeArr as $yrke) {
                echo "<option value = '" . $yrke . "'>" . $yrke . "</option>";
            }
            echo "</select>";
            ?>

            <input type="submit" name="submit" value="Registrer">

        </form>

        <div id= "form-errors" class="fadeout">
            <ul>
                <li class="error-li" id="forNavn-error"></li>
                <li class="error-li" id="etterNavn-error"></li>
                <li class="error-li" id="fodselsAar-error"></li>
                <li class="error-li" id="yrker-error"></li>
            </ul>
        </div>

    </div>
    <?php
}
?>

<?php
function parse($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
</body>
</html>