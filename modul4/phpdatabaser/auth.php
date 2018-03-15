<?php

    $host = "kark.uit.no";
    $dbname = "stud_v18_lokken";
    $username = "stud_v18_lokken";
    $password = "passsord";

try
{
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
}
catch(PDOException $e)
{
    //throw new Exception($e->getMessage(), $e->getCode);
    print($e->getMessage());
}
?>