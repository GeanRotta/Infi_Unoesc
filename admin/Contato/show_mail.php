<?php
 if($_SESSION['adm']==true){ ?>
<!-- Arquivo index php para paginas inf unoesc -->
<br/>
<?php 
	require("conecta_contatos.php");
		$collapse = '1';
		$sql = "select * from contatos";
		$resultado = mysql_query($sql, $conn);
		while($linha = mysql_fetch_array($resultado)){
	?>
   		<div align="center">
          <div class="panel panel-default">
			<div class="panel-heading">
			  <h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $collapse?>">
				 	<?php echo"$linha[nome] - $linha[assunto]"; ?>
				</a>
			  </h4>
			</div>
			<div id="<?php echo $collapse ?>" class="panel-collapse collapse">
			  <div class="panel-body" align="justify">
				<?php 
               echo'<span style="text-aling:center;"><h4><a href="?p=Contato/apaga&id='.$linha['id'].'"> Excluir </a></h4></span><br/>';
               echo"E-mail nº: $linha[id]<br/><br/><br/><br/>";
               echo"Nome: $linha[nome]<br/><br/>";
               echo"Endereço: $linha[email]<br/><br/>";
               echo"Assunto: $linha[assunto]<br/><br/>";
               echo"Mensagem: $linha[mensagen]<br/><br/>";
               echo"Enviado em: $linha[data_envio]<br/><br/>";
            ?>
			  </div>
			</div>
		  </div>
        </div>
		  &nbsp;
	<?php
		$collapse = $collapse + 1;
		}
      mysql_close();
	?>
<?php 
}else{
echo'<div class="alert alert-danger" role="alert">Você não tem acesso a essa página!</div>';
}
?>