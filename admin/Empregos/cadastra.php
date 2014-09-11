<a href="<?php echo $caminho."?p=Empregos/show_vagas"?>"><button class="btn btn-primary">Voltar</button></a><br/>
<?php 
if(isset($_POST['enviar'])){
   include('conecta.php');
   $vaga = $_POST['vaga'];
   $numvaga = $_POST['numvagas'];
   $empresa = $_POST['empresa'];
   $salario = $_POST['salario'];
   $escolaridade = $_POST['ensino'];
   $descricao = $_POST['descricao'];
   $info_mais = $_POST['adicionais'];
   $mail = $_POST['email_contato'];
   $fone = $_POST['fone_contato'];
   
   
   $sql = "insert into empregos(vaga,numvagas,empresa,salario,escolaridade,descricao,info_adicional,contato_mail,contato_fone,logo) values
          ('$vaga','$numvaga','$empresa','$salario','$escolaridade','$descricao','$info_mais','$mail','$fone',' ')";
  $result = mysql_query($sql,$conn);
   echo $result?"feito":"fail";
   if($result){
      echo'<div class="alert alert-success" role="alert">Salvo com sucesso!</div>';   
   }else{
      echo'<div class="alert alert-danger" role="alert">Erro ao cadastrar vaga!</div>'; 
   }
}
?>