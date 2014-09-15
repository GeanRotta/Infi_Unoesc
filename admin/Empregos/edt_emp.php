 <?php if($_SESSION['adm']==true){    
 	require('conecta.php');?>
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
   if(($vaga == "") || ($empresa == "") || ($mail == "")){
            echo "Preencha as informações corretamente.";
            exit;
        }else {
			$sql = "update empregos set vaga='$vaga', numvagas='$numvaga', empresa='$empresa', salario='$salario', escolaridade='$escolaridade', descricao='$descricao',
            info_adicional='$info_mais',contato_mail='$mail' ,contato_fone='$fone' ,logo=' ' where id=$id ";
  			$result = mysql_query($sql,$conn);
   				if($result){
      				echo "<script>alert('Vaga atualizada com sucesso.');</script>";
                	echo "<script>window.location = 'http://localhost/docs/Infi_Unoesc/admin/?p=Empregos/show_vagas';</script>";   
   				}else{
      				echo "<script>alert('Erro ao atualizar a Vaga!.');</script>"; 
					echo "<script>window.location = 'http://localhost/docs/Infi_Unoesc/admin/?p=Empregos/show_vagas';</script>";
   				}
		}
}
?>
 
 
 <script type="text/javascript">
            function validar(){
                var msg = "---------------- Erro ----------------\nPreencha o(s) seguinte(s) campo(s):\n-------------------------------------\n";
                if(document.getElementById("vaga").value.length <= 0){
                    msg += "Preencha o campo Título.\n";
                }
                if(document.getElementById("empresa").value.length <= 0){
                    msg += "Preencha o campo Contratante.\n";
                }
				 if(document.getElementById("email_contato").value.length <= 0){
                    msg += "Preencha o campo de E-mail.\n";
                }
                if(msg != "---------------- Erro ----------------\nPreencha o(s) seguinte(s) campo(s):\n-------------------------------------\n")
                {
                    alert(msg);
                    return false;
                }
            }
        </script> 
 
 <?php 
	require("conecta.php");
   $id=$_GET['id'];   
	$sql = "select * from empregos where id=$id";
	$resultado = mysql_query($sql, $conn);
	$linha=array();
   $linha = mysql_fetch_array($resultado);
   ?>
 <form class="form-horizontal" method="post" action="?p=Empregos/edt_emp&id=<?=$linha['id']?>" onsubmit="return validar()">
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
}else{
   include("header.php");
   echo'<div class="alert alert-danger" role="alert">Você não tem acesso a essa página!</div>';
   include('footer.php');
}
?>
