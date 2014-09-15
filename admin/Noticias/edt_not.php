<?php // if(isset($_SESSION['adm'])){ ?>

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
            $SQL = "UPDATE noticias SET titulo = '".$titulo."', descricao = '".$conteudo."', imagem = '', video = '".$video."' WHERE id = ".$_GET["id"];
            $query = mysql_query($SQL);
            
            if(mysql_affected_rows($conn) > 0){
                echo "<script>alert('Notícia atualizada com sucesso.');</script>";
                echo "<script>window.location = 'http://localhost/docs/Infi_Unoesc/admin/?p=Noticias/show_notice';</script>";
                }
            else{
                    echo "<script>alert('Erro ao atualizar a Notícia!.');</script>";
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
			<?php
            //busca dados e atribui ao formulario
        		if(isset($_GET["id"])){
            		if(is_numeric($_GET["id"])){
                	$SQL = "SELECT * FROM noticias WHERE id = ".$_GET["id"];
                	$executa = mysql_query($SQL);
                	$resultado = mysql_fetch_array($executa);
                
            }
        ?>  
        <form name="frm_Cadastro" class="form-horizontal" method="post" action="?p=Noticias/edt_not&id=<?php echo $_GET["id"]?>" onsubmit="return validar();">
        	<fieldset>
        
        <!-- Form Name -->
        		<legend>Editar Notícias</legend>
        
        <!-- Text input-->
        			<div class="form-group">
        				<label class="col-md-4 control-label" for="Titulo">Título</label>  
        					<div class="col-md-6">
        						<input id="Titulo" name="Titulo" type="text" placeholder="Digite o Título da Notícia" class="form-control input-md" required="" value = "<?php echo $resultado["titulo"];?>">
        
      					  </div>
        			</div>
        
        <!-- Text input-->
        			<div class="form-group">
        				<label class="col-md-4 control-label" for="Video">URL do Vídeo</label>  
        					<div class="col-md-6">
        						<input id="Video" name="Video" type="text" placeholder="Cole a URL do Vídeo" class="form-control input-md" value = "<?php echo $resultado["video"];?>">
        
        					</div>
        			</div>
        
        <!-- File Button --> 
        			<div class="form-group">
        				<label class="col-md-4 control-label" for="Imagem">Escolha uma Imagem</label>
        					<div class="col-md-4">
        						<input id="Imagem" name="Imagem" class="input-file" type="file" value = "<?php echo $resultado["imagem"];?>">
        					</div>
        			</div>
        
        <!-- Textarea -->
        			<div class="form-group">
        				<label class="col-md-4 control-label" for="Descricao">Descrição</label>
        					<div class="col-md-4">                     
        						<textarea class="form-control" id="Descricao" name="Descricao"><?php echo $resultado["descricao"];?></textarea>
       					 </div>
        			</div>
        
        <!-- Button (Double) -->
        			<div class="form-group">
        				<label class="col-md-4 control-label" for="Enviar"></label>
        					<div class="col-md-8">
        						<button id="Enviar" name="Enviar" class="btn btn-primary">Atualizar Notícia</button>
        						<button id="Limpar" name="Limpar" class="btn btn-default">Limpar</button>
        					</div>
        			</div>
        <?php
            }
        ?>
        	</fieldset>
        </form>

<?php 
//   }
?>