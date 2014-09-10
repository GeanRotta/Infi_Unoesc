 <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Área do administrador </title>
    <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
            <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li <?php if ($pagina=="show_notice"){echo "class=\"active\" ";}?>><a href="<?php echo $caminho.'?p=show_notice'; ?>">Home</a></li>
                
                <li class="dropdown">
                   <a href="<?php echo $link.'?p=Cursos';?>" class="dropdown-toggle" data-toggle="dropdown">Cursos <span class="caret"></span></a>
                   <ul class="dropdown-menu" role="menu">
                     <li <?php if ($pagina=="Cursos/SIS"){echo "class=\"active\" ";}?>><a href="<?php echo $link.'?p=Cursos/SIS'; ?>">Sistemas de Informação</a></li>
                     <li <?php if ($pagina=="Cursos/ENG"){echo "class=\"active\" ";}?>><a href="<?php echo $link.'?p=Cursos/ENG'; ?>">Engenharia da Computação</a></li>
                     <li <?php if ($pagina=="Cursos/INF_EST"){echo "class=\"active\" ";}?>><a href="<?php echo $link.'?p=Cursos/INF_EST'; ?>">Infraestrutura dos Cursos</a></li>
                   </ul>
                 </li>
                <li <?php if ($pagina=="show_events"){echo "class=\"active\" ";}?>><a href="<?php echo $caminho.'?p=show_events';?>">Eventos</a></li>
                <li <?php if ($pagina=="show_vagas"){echo "class=\"active\" ";}?>><a href="<?php echo $caminho.'?p=show_vagas';?>">Vagas de Empregos</a></li>
                <li <?php if ($pagina=="show_notice"){echo "class=\"active\" ";}?>><a href="<?php echo $caminho.'?p=show_notice'; ?>">Notícias</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>