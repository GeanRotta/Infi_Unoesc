<?php
//if(isset($_SESSION['adm'])){ 
    include "../conecta.php";
    if(is_numeric($_GET["id"])){
        $SQL = "DELETE FROM noticias WHERE id = ".$_GET["id"];
        $query = mysql_query($SQL);
        if(mysql_affected_rows($conn)> 0){
            echo "<script>alert('News apagada com sucesso!')</script>";
            header("location:http://localhost/docs/Infi_Unoesc/admin/?p=Noticias/show_notice#");
        }
    }
	mysql_close();
//}
?>