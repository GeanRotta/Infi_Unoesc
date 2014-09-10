<a href="<?php echo $caminho."?p=show_events"?>"><button class="btn btn-primary">Voltar</button></a><br/>
<form class="form-horizontal" method="post" action="">
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
  <input id="local" name="local" placeholder="Hora e local do evento" class="form-control input-md" type="text">
    
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
