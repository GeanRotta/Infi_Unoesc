<!-- 
<div class="alert alert-success" role="alert">E-mail enviado com sucesso!</div>
<div class="alert alert-danger" role="alert">Erro ao enviar E-mail!</div>
-->
<?php
$destino = "tiago.zonta@unoesc.edu.br";
  if(isset($_POST['submit'])){
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['msg'];
   $enviado = mail($destino,$assunto,$mensagem,"From: $nome, E-mail: $email");
	if($enviado){
   $erro = "null"?>
	  <div class="alert alert-success" role="alert">E-mail enviado com sucesso!</div>
	<?php
    }else{
    $erro = "1"?>
	  <div class="alert alert-danger" role="alert">Erro ao enviar E-mail!</div>
	<?php
	}
   require("conecta.php");
   $sql = "insert into contatos(nome, email, assunto, mensagen, erro) values ('$nome', '$email','$assunto','$mensagem', $erro)";
   $result = mysql_query($sql,$conn);
   }

?>


<!-- codigo php acima e tals-->
<!-- Arquivo index php para paginas inf unoesc -->
<div align="center">
<form class="form-horizontal" method="post" action="">
    <fieldset>
    
        <!-- Form Name -->
        <!-- <legend>Contato</legend> -->
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="nome">Nome:</label>  
          <div class="col-md-4">
          <input id="nome" name="nome" placeholder="Digite seu nome" class="form-control input-md" required="" type="text">
            
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="email">E-mail:</label>  
          <div class="col-md-4">
          <input id="email" name="email" placeholder="Digite seu e-mail" class="form-control input-md" required="" type="text">
          <span class="help-block">example@site.com</span>  
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="assunto">Assunto:</label>  
          <div class="col-md-4">
          <input id="assunto" name="assunto" placeholder="Assunto da mensagem" class="form-control input-md" required="" type="text">
            
          </div>
        </div>
        
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="msg">Digite sua mensagem:</label>
          <div class="col-md-4">                     
            <textarea class="form-control" id="msg" name="msg"></textarea>
          </div>
        </div>
        
        <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="submit"></label>
          <div class="col-md-2">
            <button id="submit" name="submit" class="btn btn-primary">Enviar!</button>
            <button id="limpa" name="limpa" class="btn btn-default">Limpar</button>
          </div>
        </div>
    
    </fieldset>
</form>
</div>