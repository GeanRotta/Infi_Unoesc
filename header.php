<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
	switch($p){
	case "Home":
	 $pg = "Home";
	 break;
	 case "Cursos/SIS":
	 $pg = "Sistemas de Informação";
	 break;
	 case "Cursos/ENG":
	 $pg = "Engenharia da Computação";
	 break;
	 case "Cursos/INF_EST":
	 $pg = "Infra-Estrutura dos Cursos";
	 break;
	 case "Eventos":
	 $pg = "Eventos";
	 break;
	 case "Vagas_de_Emprego":
	 $pg = "Vagas de Emprego";
	 break;
	 case "Noticias":
	 $pg = "Notícias";
	 break;
	 case "Contato":
	 $pg = "Fale Conosco!";
	 break;	
	 case "developers":
	 $pg = "Desenvolvedores";
	 break;
		
	}
	
	?>
    <title><?php echo $titulo." | ".$pg; ?></title>
	
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  	<header>
  		<div class="page-header">
  			<h1><small></small></h1>
            <div class="logo_unoesc">
        		<a href="http://www.unoesc.edu.br" target="_blank"><img src="Imagens/Logo_Unoesc.png" width="20%"/></a>
        
        </div>
    </div>
	</header>