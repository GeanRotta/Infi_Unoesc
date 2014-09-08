<?php 
	include("conecta.php");
?>
<html>
        <form class="form-horizontal">
        	<fieldset>
        
        <!-- Form Name -->
        		<legend>Cadastro de Notícias</legend>
        
        <!-- Text input-->
        			<div class="form-group">
        				<label class="col-md-4 control-label" for="Titulo">Titulo</label>  
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
        				<label class="col-md-4 control-label" for="Imagem">Escolha uma imagem</label>
        					<div class="col-md-4">
        						<input id="Imagem" name="Imagem" class="input-file" type="file">
        					</div>
        			</div>
        
        <!-- Textarea -->
        			<div class="form-group">
        				<label class="col-md-4 control-label" for="Descricao">Descricao</label>
        					<div class="col-md-4">                     
        						<textarea class="form-control" id="Descricao" name="Descricao"></textarea>
       					 </div>
        			</div>
        
        <!-- Button (Double) -->
        			<div class="form-group">
        				<label class="col-md-4 control-label" for="Enviar"></label>
        					<div class="col-md-8">
        						<button id="Enviar" name="Enviar" class="btn btn-primary">Enviar</button>
        						<button id="Limpar" name="Limpar" class="btn btn-default">Limpar</button>
        					</div>
        			</div>
        
        	</fieldset>
        </form>
</html>
