<!-- Arquivo index php para paginas inf unoesc -->
<?php 
	include("conecta.php");
?>

<html>
	<?php
		$collapse = '1';
		$sql = "select * from eventos";
		$resultado = mysql_query($sql, $conn);
		while($linha = mysql_fetch_array($resultado)){
	?>
   		<div align="center">
          <div class="panel panel-default">
			<div class="panel-heading">
			  <h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $collapse?>">
				 	<?php echo"$linha[nome]"; ?>
				</a>
			  </h4>
			</div>
			<div id="<?php echo $collapse ?>" class="panel-collapse collapse">
			  <div class="panel-body" align="justify">
				<?php 
					echo "<b>Local:</b> &nbsp;".$linha["local"]."<br><br>";
					echo "<b>Data:</b> &nbsp;".$linha["data"]."<br><br>";
					if($linha["video"] != "")
						echo $linha["video"]."<br><br>";
					if($linha["imagem"] != "")
						echo $linha["imagem"]."<br><br>";
					echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						$linha[descricao]";
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
</html>