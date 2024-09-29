<?php

    $host="localhost:8080";
    $username = "root";
    $db="dasod";
    // $pass="Vg#OPyn27";
    // $username = "u934575834_dasod_admin001";
    // $db="u934575834_dasod_bdd";

    try
    {
        $conn = new PDO("mysql: host=$host; dbname=$db", $username, "");
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }catch(PDOException $m)
    {
        echo 'Erreur au niveau de '.$m->getMessage();
    }
?>