<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studentregister</title>
    <link type="text/css" rel="stylesheet" href="css/style2.css"/>
    <script src="js/search.js"></script>
</head>
<body>

<?php


    require_once ('auth.php');
    require_once ('student.class.php');

    include('nav.html');

    echo "<div class='container'>";

    if (isset($_GET['id'])) {
        echo "<h2>Studentinfo</h2><br>";
        $resultat = $db->query("SELECT * FROM studenter WHERE id = " . $_GET['id']);
        $student = $resultat->fetchObject("Student");


        echo "<p>ID: " . $student->hentId() . "</p>";
        echo "<p>Navn: " . $student->hentNavn()  . "</p>";
        echo "<p>Mobil: " . $student->hentMobil() . "</p>";
        echo "<p>Klasse: " . $student->hentKlasse() . "</p>";
        echo "<p>E-post: " . (0 < strlen($student->hentEpost()) ? $student->hentEpost() . "</p>" : "-</p>");
        echo "<p>Nettside: " . (0 < strlen($student->hentWww()) ? $student->hentWww() . "</p>" : "-</p>");
        echo"<br><p><a href=" . $_SERVER['HTTP_REFERER'] . ">« Tilbake</a></p>";
    } else {

        echo "<input type='text' id='search' placeholder='Søk med studentnavn...'>";
        echo "<h2>Studenter</h2>";

        $resultat = $db->query("SELECT * FROM studenter ORDER BY etternavn");
        echo "<ul id='student-list'>";
        while ($student = $resultat->fetchObject("Student")) {
            print("<li class='student-list-item'><a class='student-item-link' href=" . $_SERVER['PHP_SELF'] . "?id=" . $student->hentId() . ">" . $student->hentEtternavn() . ", " . $student->hentFornavn() . "</a></li>");
        }
        echo "</ul>";
    }

    echo "</div>";
?>
</body>
<script>
    //Legger til skript når dokumentet er lastet inn.
    var search = document.getElementById('search');
    search.onchange = function() {
        searchStudents();
    }
    search.onkeyup = function() {
        searchStudents();
    }
</script>
</html>