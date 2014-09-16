 <?php
    //Dados conexao MySql
    $server = "localhost";
    $user = "root";
    $pw = "";
    $dbname = "users";
    $conn = mysql_connect($server, $user, $pw);
    $db = mysql_select_db($dbname, $conn);
?>
