<?php 
	include("conecta.php");
?>
<html>
	<?php
		$collapse = '1';
		$sql = "select * from noticias";
		$resultado = mysql_query($sql, $conn);
		while($linha = mysql_fetch_array($resultado)){
	?>
   		<div align="center">
          <div class="panel panel-default">
			<div class="panel-heading">
			  <h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $collapse?>">
				 	<?php echo"$linha[titulo]"; ?>
				</a>
			  </h4>
			</div>
			<div id="<?php echo $collapse ?>" class="panel-collapse collapse">
			  <div class="panel-body">
				<?php echo"$linha[descricao]"; ?>
			  </div>
			</div>
		  </div>
        </div>
		  
	<?php
		$collapse = $collapse + 1;
		}
	?>
</html>