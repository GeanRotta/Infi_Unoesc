<?php
    //Dados conexao MySql
    $server = "localhost";
    $user = "root";
    $pw = "";
    $dbname = "cad_noticias";
    $conn = mysql_connect($server, $user, $pw);
    $db = mysql_select_db($dbname, $conn);
?>
