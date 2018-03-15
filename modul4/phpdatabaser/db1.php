<!DOCTYPE html>

<html>
<body>
<h1>Studentregister</h1>   
<?php
//  Viser alle poster ved hjelp av fetch_assoc()

    require_once ('auth.php');
    $resultat = $db->query("SELECT * FROM studenter");
    echo "<table border=1>\n";
    echo "<tr><th>Navn</th><th>Klasse</th></tr>\n";
    while ($rad = $resultat->fetch(PDO::FETCH_ASSOC) )
    {
        print("<tr><td>" . $rad["etternavn"] . ", " . $rad["fornavn"] . "</td><td>" . $rad["klasse"] . "</tr>\n");
    }
    echo "</table>\n";
?>
</body>
</html>