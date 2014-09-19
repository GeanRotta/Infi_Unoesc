<?php if($_SESSION['adm']==true){ ?>
<a href="<?php echo $caminho."?p=Eventos/show_events"?>"><button class="btn btn-primary">Voltar</button></a><br/>

<?php
    include("conecta.php");
    if(isset($_POST["name"])){
        $nome = $_POST["name"];
        $local = $_POST["local"];
		$data = $_POST["data"];
		$url = $_POST["videos"];
		//$imagem = $_POST["imagens"];
		$descricao = $_POST["descricao"];
        if(($nome == "") || ($local == "") || ($descricao == "")){
            echo "Preencha as informações corretamente.";
            exit;
		}else {
			$SQL = "UPDATE noticias SET nome = '".$nome."', local = '".$local."', data = '".$data."', video = '".$url."', descricao = '".$descricao."' WHERE id = ".$_GET["id"];
            $query = mysql_query($SQL);
            
            if(mysql_affected_rows($conn) > 0){
                echo "<script>alert('Evento atualizado com sucesso.');</script>";
                echo "<script>window.location = 'http://localhost/docs/Infi_Unoesc/admin/?p=Eventos/cad_eve';</script>";
                }
            else{
                    echo "<script>alert('Erro ao atualizar o Evento!.');</script>";
                    echo "<script>window.location = 'http://localhost/docs/Infi_Unoesc/admin/?p=Eventos/cad_eve';</script>";
                }
        }   
    }
?>

<script type="text/javascript">
            function validar(){
                var msg = "---------------- Erro ----------------\nPreencha o(s) seguinte(s) campo(s):\n-------------------------------------\n";
                if(document.getElementById("name").value.length <= 0){
                    msg += "Preencha o campo Nome do evento.\n";
                }
                if(document.getElementById("local").value.length <= 0){
                    msg += "Preencha o campo Local.\n";
                }
				if(document.getElementById("descricao").value.length <= 0){
                    msg += "Preencha o campo Descricao.\n";
                }
                if(msg != "---------------- Erro ----------------\nPreencha o(s) seguinte(s) campo(s):\n-------------------------------------\n")
                {
                    alert(msg);
                    return false;
                }
            }
        </script>
<?php
            //busca dados e atribui ao formulario
        		if(isset($_GET["id"])){
            		if(is_numeric($_GET["id"])){
                	$SQL = "SELECT * FROM eventos WHERE id = ".$_GET["id"];
                	$executa = mysql_query($SQL);
                	$resultado = mysql_fetch_array($executa);
            }
        ?>
		
		
 <form class="form-horizontal" method="post" action="?p=Eventos/edt_eve&id=<?php echo $_GET["id"]?>" onsubmit="return validar();">
<fieldset>

<!-- Form Name -->
<legend>Editar Eventos</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Nome do Evento: </label>  
  <div class="col-md-4">
  <input id="name" name="name" placeholder="Nome" class="form-control input-md" type="text" value = "<?php echo $resultado["nome"];?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="local">Local/Hora</label>  
  <div class="col-md-4">
  <input id="local" name="local" placeholder="Hora e local do evento" class="form-control input-md" type="text" value = "<?php echo $resultado["local"];?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="data">Data do evento</label>  
  <div class="col-md-4">
  <input id="data" name="data" placeholder="Que dia será o evento?" class="form-control input-md" type="text" value = "<?php echo $resultado["data"];?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="videos">URL do Vídeo</label>  
  <div class="col-md-4">
  <input id="videos" name="videos" placeholder="Cole aqui a URL do video" class="form-control input-md" type="text" value = "<?php echo $resultado["video"];?>">
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="imagens">Escolha uma Imagen</label>
  <div class="col-md-4">
    <input id="imagens" name="imagens" class="input-file" type="file">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="descricao">Descrição do Evento:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="descricao" name="descricao"><?php echo $resultado["descricao"];?></textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="enviar"></label>
  <div class="col-md-8">
    <button id="enviar" name="enviar" class="btn btn-primary">Atualizar Evento</button>
    <button id="limpar" name="limpar" class="btn btn-default">Limpar!</button>
  </div>
</div>

</fieldset>
</form>


<?php
}
mysql_close();
}else{
   include("header.php");
   echo'<div class="alert alert-danger" role="alert">Você não tem acesso a essa página!</div>';
   include('footer.php');
}
 ?>