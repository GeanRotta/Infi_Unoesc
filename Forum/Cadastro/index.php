<?php
if(isset($_POST['cadastre'])){
require_once("conectausr.php");
$nome = $_POST['nome'];
if($_POST['curso']==1){
$curso = "Engenharia da Computação";
}else if($_POST['curso']==2){
$curso = "Sistemas da Informação";
}else{
$curso = "none";
}
$user = $_POST['user'];
$senha =  md5($_POST['password']);
$sql = "INSERT INTO `users`.`cadastros` (`nome` ,`curso` ,`usuario` ,`senha`)VALUES ( '$nome', '$curso', '$user', '$senha');";
$result = mysql_query($sql,$conn);
if($result){
    echo'<div class="alert alert-success" role="alert">Cadastro feito com sucesso!</div>';
    }else{
    echo'<div class="alert alert-danger" role="alert">Erro ao cadastrar!</div>';
    }
mysql_close();
}


?>

   <div align="center">
      <form class="form-horizontal" method="post" action="<?=$link.'?p=Forum/Cadastro'?>">
      <fieldset>

      <!-- Form Name -->
      <legend>Cadastre-se!</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nome">Nome:</label>  
        <div class="col-md-5">
        <input id="nome" name="nome" placeholder="Nome" class="form-control input-md" required="" type="text">
          
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="curso">Curso</label>
        <div class="col-md-5">
          <select id="curso" name="curso" class="form-control">
            <option value="0">--Selecione seu curso--</option>
            <option value="1">Engenharia da Computação</option>
            <option value="2">Sistemas de Informação</option>
          </select>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="user">Usuário:</label>  
        <div class="col-md-4">
        <input id="user" name="user" placeholder="Usuário" class="form-control input-md" required="" type="text">
          
        </div>
      </div>

      <!-- Password input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="password">Senha:</label>
        <div class="col-md-4">
          <input id="password" name="password" placeholder="Senha" class="form-control input-md" required="" type="password">
          
        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="cadastre"></label>
        <div class="col-md-4">
          <button id="cadastre" name="cadastre" class="btn btn-primary">Cadastrar-se</button>
        </div>
      </div>

      </fieldset>
      </form>
   </div>