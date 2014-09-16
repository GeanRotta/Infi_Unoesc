 <?php
 session_start();
 if(isset($_SESSION['adm']) == true ){ 
 ?>
 <a href="<?php echo $caminho."?p=Empregos/show_vagas"?>"><button class="btn btn-primary">Voltar</button></a><br/>
<?php 

   include('../conecta.php');
   $id=$_GET['id'];
   $sql = "DELETE FROM `empregos` WHERE id =$id";
   $result = mysql_query($sql,$conn);
   if($result){
            echo "<script>alert('Vaga apagada com sucesso!')</script>";
            header("location:http://localhost/docs/Infi_Unoesc/admin/?p=Empregos/show_vagas");
        }   
   else{
      echo "<script>alert('Erro ao apagar vaga!')</script>";
      header("location:http://localhost/docs/Infi_Unoesc/admin/?p=Noticias/show_notice#"); 
   }
   mysql_close();
  }/*/else{
      include("../header.php");
      echo'<div class="alert alert-danger" role="alert">Você não tem acesso a essa página!</div>';
      include('../footer.php');
}/*/
?>