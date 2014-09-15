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
              <span style="text-aling:center;"><h4> <a href="?p=Empregos/edt_emp&id='.$linha['id'].'">Editar</a> |
              <a href="#" onclick="apagar('<?php echo $linha["id"];?>','<?php echo $linha["vaga"];?>')"> Excluir </a></h4></span>
              <br/>';
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
<?php 
     mysql_close();
   }else{
      include("header.php");
      echo'<div class="alert alert-danger" role="alert">Você não tem acesso a essa página!</div>';
      include('footer.php');
   }
?>