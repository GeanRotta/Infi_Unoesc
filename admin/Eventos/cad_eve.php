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
            $SQL = "INSERT INTO eventos (nome, local, data, video, imagem, descricao)";
            $SQL .= " VALUES('$nome','$local','$data','$url','','$descricao')";
            $query = mysql_query($SQL);
            
            if(mysql_affected_rows($conn) > 0){
                echo "<script>alert('Evento cadastrado com sucesso.');</script>";
                echo "<script>window.location = 'http://localhost/docs/Infi_Unoesc/admin/?p=Eventos/cad_eve';</script>";
                }
            else{
                    echo "<script>alert('Erro ao cadastrar o Evento!.');</script>";
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

<form class="form-horizontal" method="post" action="?p=Eventos/cad_eve" onsubmit="return validar();">
<fieldset>

<!-- Form Name -->
<legend>Cadastrar Eventos</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Nome do evento: </label>  
  <div class="col-md-4">
  <input id="name" name="name" placeholder="Nome" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="local">Local/Hora</label>  
  <div class="col-md-4">
  <input id="local" name="local" placeholder="Local do evento e hora" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="data">Data do Evento</label>  
  <div class="col-md-4">
  <input id="data" name="data" placeholder="Que dia será o evento?" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="videos">URL do Vídeo</label>  
  <div class="col-md-4">
  <input id="videos" name="videos" placeholder="Cole aqui a URL do video" class="form-control input-md" type="text">
    
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
    <textarea class="form-control" id="descricao" name="descricao"></textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="enviar"></label>
  <div class="col-md-8">
    <button id="enviar" name="enviar" class="btn btn-primary">Cadastrar Evento</button>
    <button id="limpar" name="limpar" class="btn btn-default">Limpar!</button>
  </div>
</div>

</fieldset>
</form>
<?php 
}else{
   include("header.php");
   echo'<div class="alert alert-danger" role="alert">Você não tem acesso a essa página!</div>';
   include('footer.php');
} ?>