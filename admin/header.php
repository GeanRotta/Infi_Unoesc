 <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Área do administrador</title>
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
                <li <?php if ($pagina=="cad_not"){echo "class=\"active\" ";}?>><a href="<?php echo $caminho.'?p=cad_not'; ?>">Notícias</a></li>
                  <li <?php if ($pagina=="cad_eve"){echo "class=\"active\" ";}?>><a href="<?php echo $caminho.'?p=cad_eve';?>">Eventos</a></li>
                  <li <?php if ($pagina=="cad_emp"){echo "class=\"active\" ";}?>><a href="<?php echo $caminho.'?p=cad_emp';?>">Vagas de Empregos</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>