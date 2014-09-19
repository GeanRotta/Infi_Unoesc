<?php if($_SESSION['adm']==true){ ?>


<a href="<?php echo $caminho."?p=Eventos/cad_eve"?>"><button class="btn btn-primary">Cadastrar</button></a><br/>
<?php
    include ("conecta.php");
	$collapse = '1';
	$sql = "select * from eventos";
	$resultado = mysql_query($sql, $conn);
	while($exibir = mysql_fetch_array($resultado)){
?>
<script type="text/javascript" >
     function apagar(id, desc){
        if(window.confirm("Deseja realmente apagar este registro: " + desc))
            window.location = 'Eventos/apagar.php?id=' + id;
      }                
</script> 
<div align="center">
          <div class="panel panel-default">
			<div class="panel-heading">
			  <h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $collapse?>">
				 	<?php echo $exibir ["nome"]; ?>
				</a>
			  </h4>
			</div>
			<div id="<?php echo $collapse ?>" class="panel-collapse collapse">
			  <div class="panel-body" align="justify">
				<html> 
                <span style="text-aling:center;">
                <h4><a href="?p=Eventos/edt_eve&id=<?=$exibir['id']?>">Editar </a>|
                <a href="#" onclick="apagar('<?php echo $exibir["id"];?>','<?php echo $exibir["descricao"];?>')"> Excluir </a></h4></span><br/>
				</html>
               <?php
			   echo "<b>Local: </b> &nbsp;".$exibir["local"]."<br><br>";
			   echo "<b>Data: </b> &nbsp;".$exibir["data"]."<br><br>";
               echo $exibir["descricao"]."<br><br>";
			   if($exibir["video"] != "")
			   		echo $exibir["video"]."<br><br>";
			   if($exibir["imagem"] != "")
			   		echo $exibir["imagem"]."<br><br>";
			   ?>
			  </div>
			</div>
		  </div>
        </div>
		  &nbsp;
	<?php
		$collapse = $collapse + 1;
	}
	?> 
<?php 
}else{
   include("header.php");
   echo'<div class="alert alert-danger" role="alert">Você não tem acesso a essa página!</div>';
   include('footer.php');
}
?>