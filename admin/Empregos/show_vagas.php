<?php if($_SESSION['adm']==true){ ?>
<a href="<?php echo $caminho."?p=Empregos/cad_emp"?>"><button class="btn btn-primary">Cadastrar</button></a><br/>
<br/>
<!-- Arquivo index php para paginas inf unoesc -->

<script type="text/javascript" >
     function apagar(id, desc){
        if(window.confirm("Deseja realmente apagar este registro: " + desc))
            window.location = 'Empregos/apaga.php?id=' + id;
      }                
</script> 

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
              <span style="text-aling:center;">
			  <h4> <a href="?p=Empregos/edt_emp&id=<?=$linha['id']?>">Editar </a> |
              <a href="#" onclick="apagar('<?php echo $linha["id"];?>','<?php echo $linha["vaga"];?>')"> Excluir </a></h4></span>
              <br/>
			   <?php 
               echo"<b>Vaga: </b> $linha[vaga]<br/><br/>";
               echo"<b>Nº de Vagas: </b> $linha[numvagas]<br/><br/>";
               echo"<b>Empresa: </b> $linha[empresa]<br/><br/>";
               echo"<b>Salário: </b> $linha[salario]<br/><br/>";
               echo"<b>Nível de escolaridade: </b> $linha[escolaridade]<br/><br/>";
               echo"<b>Descricao: </b> $linha[descricao]<br/><br/>";
               echo"<b>Informações adicionais: </b> $linha[info_adicional]<br/><br/>";
               echo"<b>Interessados entrar em contato atavés: </b><br/><br/>";
               echo"<b>E-mail: </b> $linha[contato_mail]<br/><br/>";
               echo"<b>Telefone(s): </b> $linha[contato_fone]";
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
     mysql_close();
   }else{
      include("header.php");
      echo'<div class="alert alert-danger" role="alert">Você não tem acesso a essa página!</div>';
      include('footer.php');
   }
?>