<?php
    //Dados conexao MySql
    $server = "http://engsis.esy.es/";
    $user = "u302750823_admc";
    $pw = "6rt3zx7wCN";
    $dbname = "u302750823_cont";
    $conn = mysql_connect($server, $user, $pw);
    $db = mysql_select_db($dbname, $conn);
?>
