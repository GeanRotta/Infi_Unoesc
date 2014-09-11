<a href="<?php echo $caminho."?p=Noticias/show_notice"?>"><button class="btn btn-primary">Voltar</button></a><br/>
 <?php 
	include("conecta.php");
?>
        <form class="form-horizontal" method="post" action="">
        	<fieldset>
        
        <!-- Form Name -->
        		<legend>Editar Notícias</legend>
        
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
        						<button id="Enviar" name="Enviar" class="btn btn-primary">Atualizar Notícia</button>
        						<button id="Limpar" name="Limpar" class="btn btn-default">Limpar</button>
        					</div>
        			</div>
        
        	</fieldset>
        </form>

