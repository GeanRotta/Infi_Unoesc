﻿<!-- Arquivo index php para paginas inf unoesc -->
<?php 
	require("conecta.php");
		$collapse = '1';
		$sql = "select * from empregos";
		$resultado = mysql_query($sql, $conn);
		while($linha = mysql_fetch_array($resultado)){
	?>
   		<div align="center">
          <div class="panel panel-default">
			<div class="panel-heading">
			  <h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $collapse?>">
				 	<?php echo"$linha[vaga]"; ?>
				</a>
			  </h4>
			</div>
			<div id="<?php echo $collapse ?>" class="panel-collapse collapse">
			  <div class="panel-body" align="justify">
				<?php 
               echo"Vaga: $linha[vaga]<br/><br/>";
               echo"Nº de Vagas: $linha[numvagas]<br/><br/>";
               echo"Empresa: $linha[empresa]<br/><br/>";
               echo"Salário: $linha[salario]<br/><br/>";
               echo"Nível de escolaridade: $linha[escolaridade]<br/><br/>";
               echo"Descricao: $linha[descricao]<br/><br/>";
               echo"Informações adicionais: $linha[info_adicional]<br/><br/>";
               echo"Interessados entrar em contato atavés:<br/><br/>";
               echo"E-mail: $linha[contato_mail]<br/>";
               echo"Telefone(s): $linha[contato_fone]<br/>";
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