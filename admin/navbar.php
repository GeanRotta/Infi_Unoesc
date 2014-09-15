   
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
                <li <?php if (strstr($pagina,"Noticias")){echo "class=\"active\" ";}?>><a href="<?php echo $caminho.'?p=Noticias/show_notice'; ?>">Notícias</a></li>
                <li <?php if (strstr($pagina,"Eventos")){echo "class=\"active\" ";}?>><a href="<?php echo $caminho.'?p=Eventos/show_events';?>">Eventos</a></li>
                <li <?php if (strstr($pagina,"Empregos")){echo "class=\"active\" ";}?>><a href="<?php echo $caminho.'?p=Empregos/show_vagas';?>">Vagas de Empregos</a></li>
                <li <?php if (strstr($pagina,"Contato")){echo "class=\"active\" ";}?>><a href="<?php echo $caminho.'?p=Contato/show_mail'; ?>">E-mails</a></li>
                <li <?php if (strstr($pagina,"Usuarios")){echo "class=\"active\" ";}?>><a href="<?php echo $caminho.'?p=Usuarios/show_user'; ?>">Usuários</a></li>
                <li class="navbar-right"><a href="<?php echo $caminho.'?p=logout'; ?>" >Sair</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>