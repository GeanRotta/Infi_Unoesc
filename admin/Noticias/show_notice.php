<?php// if(isset($_SESSION['adm'])){ ?>
<a href="<?php echo $caminho."?p=Noticias/cad_not"?>"><button class="btn btn-primary">Cadastrar</button></a><br/>
<?php
    include ("conecta.php");
	$collapse = '1';
	$sql = "select * from noticias";
	$resultado = mysql_query($sql, $conn);
	while($exibir = mysql_fetch_array($resultado)){
?>
<script type="text/javascript" >
     function apagar(id, desc){
        if(window.confirm("Deseja realmente apagar este registro: " + desc))
            window.location = 'Noticias/apagar.php?id=' + id;
      }                
</script> 
   		<div align="center">
          <div class="panel panel-default">
			<div class="panel-heading">
			  <h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $collapse?>">
				 	<?php echo $exibir ["titulo"]; ?>
				</a>
			  </h4>
			</div>
			<div id="<?php echo $collapse ?>" class="panel-collapse collapse">
			  <div class="panel-body" align="justify">
				<html>
                <span style="text-aling:center;">
                <h4><a href="?p=Noticias/edt_not&id=<?=$exibir['id']?>">Editar </a>|
                <a href="#" onclick="apagar('<?php echo $exibir["id"];?>','<?php echo $exibir["titulo"];?>')"> Excluir </a></h4></span><br/>
				</html>
               <?php
               echo $exibir["descricao"]."<br><br>";
			   echo $exibir["data"];
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
 <?php //} 
 	mysql_close();
 ?>