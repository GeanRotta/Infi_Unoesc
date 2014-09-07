    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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
        <li <?php if ($pagina=="Home"){echo "class=\"active\" ";}?>><a href="<?php echo $link.'?p=Home'; ?>">Home</a></li>
        <li class="dropdown">
          <a href="<?php echo $link.'?p=Cursos';?>" class="dropdown-toggle" data-toggle="dropdown">Cursos <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li <?php if ($pagina=="Cursos/SIS"){echo "class=\"active\" ";}?>><a href="<?php echo $link.'?p=Cursos/SIS'; ?>">Sistemas de Informação</a></li>
            <li <?php if ($pagina=="Cursos/ENG"){echo "class=\"active\" ";}?>><a href="<?php echo $link.'?p=Cursos/ENG'; ?>">Engenharia da Computação</a></li>
            <li <?php if ($pagina=="Cursos/INF_EST"){echo "class=\"active\" ";}?>><a href="<?php echo $link.'?p=Cursos/INF_EST'; ?>">Infraestrutura dos Cursos</a></li>
          </ul>
          <li <?php if ($pagina=="Eventos"){echo "class=\"active\" ";}?>><a href="<?php echo $link.'?p=Eventos';?>">Eventos</a></li>
          <li <?php if ($pagina=="Vagas_de_Emprego"){echo "class=\"active\" ";}?>><a href="<?php echo $link.'?p=Vagas_de_Emprego';?>">Vagas de Empregos</a></li>
          <li <?php if ($pagina=="Noticias"){echo "class=\"active\" ";}?>><a href="<?php echo $link.'?p=Noticias';?>">Notícias</a></li>
          <li <?php if ($pagina=="Contato"){echo "class=\"active\" ";}?>><a href="<?php echo $link.'?p=Contato';?>">Contato</a></li>
          <li <?php if ($pagina=="forum"){echo "class=\"active\" ";}?>><a href="<?php echo $link.'?p=Home';?>">Fórum</a></li>
        </li>
      </ul>
      <div align="right">
      	<form class="navbar-form navbar-right" role="search">
        	<div class="form-group">
        <input type="text" class="form-control" placeholder="O que você procura?">
        	</div>
        <button type="submit" class="btn btn-default">Procurar</button>
      	</form>
   	 </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
     
