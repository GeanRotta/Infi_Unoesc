
<br/>
<br/>
<div align="center">
   <form class="form-horizontal"  method="post" action="?p=login">
   <fieldset>
   <br/>
   <legend>Faça login para continuar para a área do administrador!</legend>
   <br/><br/><br/>

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
  <div class="col-md-4">
    <button id="loga" name="loga" class="btn btn-primary">Entrar</button>
    <button id="trocasenha" name="trocasenha" class="btn btn-default">Esqueci minha senha</button>
  </div>
</div>


   </fieldset>
   </form>
</div>

<?php
if(isset($_POST['loga'])){
   session_start();
   $user=$_POST['user'];
   $key=$_POST['password'];
   if($user=="UserAdm"&&$key=="S&Nh@Adm!n"){   
      echo"login foi feito.. essa merda nao quer funcionar";
      $_SESSION['adm'] = $user;
      header("location:$caminho"."index.php");
   }else{
   
      echo'<div class="alert alert-danger" role="alert">Usuário/Senha Incorreto! Tente novamente!</div>';
   }

}

?>
