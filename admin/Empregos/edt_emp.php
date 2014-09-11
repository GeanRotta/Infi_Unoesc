 <a href="<?php echo $caminho."?p=Empregos/show_vagas"?>"><button class="btn btn-primary">Voltar</button></a><br/>
 <?php 
	require("conecta.php");
   $id=$_GET['id'];   
	$sql = "select * from empregos where id=$id";
	$resultado = mysql_query($sql, $conn);
	$linha=array();
   $linha = mysql_fetch_array($resultado);
   ?>
 <form class="form-horizontal" method="post" action="?p=Empregos/edita&id=<?=$linha['id']?>">
<fieldset>

<!-- Form Name -->
<legend>Editar Vagas de Emprego</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="vaga">Vaga/Cargo:</label>  
  <div class="col-md-4">
  <input id="vaga" name="vaga" placeholder="Vaga" class="form-control input-md" type="text" value="<?=$linha['vaga']?>">
  <span class="help-block">Programador/Analista/Suporte</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="numvagas">Número de Vagas:</label>  
  <div class="col-md-4">
  <input id="numvagas" name="numvagas" placeholder="Nº de vagas" class="form-control input-md" type="text" value="<?=$linha['numvagas']?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="empresa">Contratante</label>  
  <div class="col-md-4">
  <input id="empresa" name="empresa" placeholder="Nome da empresa" class="form-control input-md" type="text" value="<?=$linha['empresa']?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="salario">Salário:</label>  
  <div class="col-md-4">
  <input id="salario" name="salario" placeholder="R$" class="form-control input-md" type="text" value="<?=$linha['salario']?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ensino">Escolaridade: </label>  
  <div class="col-md-4">
  <input id="ensino" name="ensino" placeholder="Escolaridade" class="form-control input-md" type="text" value="<?=$linha['escolaridade']?>">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="descricao">Descrição da Vaga:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="descricao" name="descricao"> <?=$linha['descricao']?></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="adicionais">Informações Adicionais</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="adicionais" name="adicionais"> <?=$linha['info_adicional']?> </textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email_contato">E-mail para Contato</label>  
  <div class="col-md-4">
  <input id="email_contato" name="email_contato" placeholder="E-mail" class="form-control input-md" type="text" value="<?=$linha['contato_mail']?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fone_contato">Telefone para contato</label>  
  <div class="col-md-4">
  <input id="fone_contato" name="fone_contato" placeholder="(xx) xxxx-xxxx" class="form-control input-md" type="text" value="<?=$linha['contato_fone']?>">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="enviar"></label>
  <div class="col-md-8">
    <button id="enviar" name="enviar" class="btn btn-primary">Atualizar Vaga</button>
    <button id="limpar" name="limpar" class="btn btn-default">Limpar!</button>
  </div>
</div>

</fieldset>
</form>
<?php
mysql_close();
?>