<div>
   <form class="form-horizontal"  method="post" action="">
   <fieldset>
   <br/><br/><br/><br/><br/>

   <!-- Text input-->
   <div class="form-group">
     <label class="col-md-4 control-label" for="user">Usuário: </label>  
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

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="loga"></label>
  <div class="col-md-8">
    <button id="loga" name="loga" class="btn btn-primary">Entrar</button>
    <button id="trocasenha" name="trocasenha" class="btn btn-default">Esqueci minha senha</button>
  </div>
</div>


   </fieldset>
   </form>
</div>
<br/><br/><br/><br/><br/>
<p align="center"><a href="<?=$link.'?p=Forum/Cadastro'?>">Não sou cadastrado!</a></p>
<?php


?>
