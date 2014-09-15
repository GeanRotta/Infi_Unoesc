<?php 
if(isset($_SESSION['adm'])){ 
?>
<?php
    include("conecta.php");
    if(isset($_POST["Titulo"])){
        $titulo = $_POST["Titulo"];
        $conteudo = $_POST["Descricao"];
		//$imagem = $_POST["Imagem"];
		$video = $_POST["Video"];
        if(($titulo == "") || ($conteudo == "")){
            echo "Preencha as informações corretamente.";
            exit;
        }else {
            $SQL = "INSERT INTO noticias (titulo, descricao, imagem, video)";
            $SQL .= " VALUES('".$titulo."','".$conteudo."','','".$video."')";
            $query = mysql_query($SQL);
            
            if(mysql_affected_rows($conn) > 0){
                echo "<script>alert('News cadastrada com sucesso.');</script>";
                echo "<script>window.location = 'http://localhost/docs/Infi_Unoesc/admin/?p=Noticias/show_notice';</script>";
                }
            else{
                    echo "<script>alert('Erro ao cadastrar a news!.');</script>";
                    echo "<script>window.location = 'http://localhost/docs/Infi_Unoesc/admin/?p=Noticias/show_notice';</script>";
                }
        }   
    }
?>

<script type="text/javascript">
            function validar(){
                var msg = "---------------- Erro ----------------\nPreencha o(s) seguinte(s) campo(s):\n-------------------------------------\n";
                if(document.getElementById("Titulo").value.length <= 0){
                    msg += "Preencha o campo Título.\n";
                }
                if(document.getElementById("Descricao").value.length <= 0){
                    msg += "Preencha o campo Descrição.\n";
                }
                if(msg != "---------------- Erro ----------------\nPreencha o(s) seguinte(s) campo(s):\n-------------------------------------\n")
                {
                    alert(msg);
                    return false;
                }
            }
        </script>  

   <form class="form-horizontal" method="post" action="?p=Noticias/cad_not" onsubmit="return validar();">
        	<fieldset>
        
        <!-- Form Name -->
        		<legend>Cadastrar Notícias</legend>
        
        <!-- Text input-->
        			<div class="form-group">
        				<label class="col-md-4 control-label" for="Titulo">Título</label>  
        					<div class="col-md-6">
        						<input id="Titulo" name="Titulo" type="text" placeholder="Digite o Título da Notícia" class="form-control input-md" required="">
        
      					  </div>
        			</div>
        
        <!-- Text input-->
        			<div class="form-group">
        				<label class="col-md-4 control-label" for="Video">URL do Vídeo</label>  
        					<div class="col-md-6">
        						<input id="Video" name="Video" type="text" placeholder="Cole a URL do Vídeo" class="form-control input-md">
        
        					</div>
        			</div>
        
        <!-- File Button --> 
        			<div class="form-group">
        				<label class="col-md-4 control-label" for="Imagem">Escolha uma Imagem</label>
        					<div class="col-md-4">
        						<input id="Imagem" name="Imagem" class="input-file" type="file">
        					</div>
        			</div>
        
        <!-- Textarea -->
        			<div class="form-group">
        				<label class="col-md-4 control-label" for="Descricao">Descrição</label>
        					<div class="col-md-4">                     
        						<textarea class="form-control" id="Descricao" name="Descricao"></textarea>
       					 </div>
        			</div>
        
        <!-- Button (Double) -->
        			<div class="form-group">
        				<label class="col-md-4 control-label" for="Enviar"></label>
        					<div class="col-md-8">
        						<button id="Enviar" name="Enviar" class="btn btn-primary">Cadastrar Notícia</button>
        						<button id="Limpar" name="Limpar" class="btn btn-default">Limpar</button>
        					</div>
        			</div>
        
        	</fieldset>
        </form>

<?php
}else{
   include("header.php");
   echo'<div class="alert alert-danger" role="alert">Você não tem acesso a essa página!</div>';
   include('footer.php');
}
?>