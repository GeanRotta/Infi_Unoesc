 <?php //if($_SESSION['adm']==true and $_SESSION['admkey']==true){ ?>
 <a href="<?php echo $caminho."?p=Empregos/show_vagas"?>"><button class="btn btn-primary">Voltar</button></a><br/>
<?php 

   include('conecta.php');
   $id=$_GET['id'];
   $sql = "DELETE FROM `empregos` WHERE id =$id";
  $result = mysql_query($sql,$conn);
   if($result){
      echo'<div class="alert alert-success" role="alert">Apagado com sucesso!</div>';   
   }else{
      echo'<div class="alert alert-danger" role="alert">Erro ao apagar vaga!</div>'; 
   }
   mysql_close();
 //  }
?>