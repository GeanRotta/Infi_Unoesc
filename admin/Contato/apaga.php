 <?php 
 if($_SESSION['adm']==true){ ?>
 <a href="<?php echo $caminho."?p=Contato/show_mail"?>"><button class="btn btn-primary">Voltar</button></a><br/>
<?php 

   include('conecta_contatos.php');
   $id=$_GET['id'];
   $sql = "DELETE FROM `contatos` WHERE id =$id";
  $result = mysql_query($sql,$conn);
   if($result){
      echo'<div class="alert alert-success" role="alert">Apagado com sucesso!</div>';   
   }else{
      echo'<div class="alert alert-danger" role="alert">Erro ao apagar E-mail!</div>'; 
   }
   mysql_close();
   }else{
echo'<div class="alert alert-danger" role="alert">Você não tem acesso a essa página!</div>';
}
?>