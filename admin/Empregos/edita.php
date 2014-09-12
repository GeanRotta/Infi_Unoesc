 <?php// if($_SESSION['adm']==true and $_SESSION['admkey']==true){ ?>
 <a href="<?php echo $caminho."?p=Empregos/show_vagas"?>"><button class="btn btn-primary">Voltar</button></a><br/>
<?php 
if(isset($_POST['enviar'])){
   include('conecta.php');
   $id=$_GET['id'];
   $vaga = $_POST['vaga'];
   $numvaga = $_POST['numvagas'];
   $empresa = $_POST['empresa'];
   $salario = $_POST['salario'];
   $escolaridade = $_POST['ensino'];
   $descricao = $_POST['descricao'];
   $info_mais = $_POST['adicionais'];
   $mail = $_POST['email_contato'];
   $fone = $_POST['fone_contato'];
   
   $sql = "update empregos set vaga='$vaga', numvagas='$numvaga', empresa='$empresa', salario='$salario', escolaridade='$escolaridade', descricao='$descricao',
           info_adicional='$info_mais',contato_mail='$mail' ,contato_fone='$fone' ,logo=' ' where id=$id ";
  $result = mysql_query($sql,$conn);
   if($result){
      echo'<div class="alert alert-success" role="alert">Salvo com sucesso!</div>';   
   }else{
      echo'<div class="alert alert-danger" role="alert">Erro ao atualizar vaga!</div>'; 
   }
}
mysql_close();
//}
?>