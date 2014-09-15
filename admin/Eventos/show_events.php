<?php if($_SESSION['adm']==true){ ?>


<a href="<?php echo $caminho."?p=Eventos/cad_eve"?>"><button class="btn btn-primary">Cadastrar</button></a><br/>
mostrar os eventos e links para edição e exclusao.


<?php 
}else{
   include("header.php");
   echo'<div class="alert alert-danger" role="alert">Você não tem acesso a essa página!</div>';
   include('footer.php');
}
?>