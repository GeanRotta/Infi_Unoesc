<?php 
session_start(); 
if(isset($_SESSION['adm']) == true){ ?>
<?php
    include ("../conecta.php");
    if(is_numeric($_GET["id"])){
        $SQL = "DELETE FROM eventos WHERE id = ".$_GET["id"];
        $query = mysql_query($SQL);
        if(mysql_affected_rows($conn)> 0){
            echo "<script>alert('Evento apagado com sucesso!')</script>";
            header("location:http://localhost/docs/Infi_Unoesc/admin/?p=Eventos/show_events#");
        }
    }
	mysql_close();
}else{
   include("../header.php");
   echo'<div class="alert alert-danger" role="alert">Você não tem acesso a essa página!</div>';
   include('../footer.php');
}
?>