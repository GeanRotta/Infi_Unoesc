 <?php //if($_SESSION['adm']==true and $_SESSION['admkey']==true){ ?>
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
 //  }
?>