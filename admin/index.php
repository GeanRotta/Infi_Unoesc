<?php
session_start();
if($_SESSION == true){
   
   $caminho = "http://localhost/docs/Infi_Unoesc/admin/";
   if(isset($_GET['p'])){
   $p=$_GET['p'];
   }else{
         $p='Noticias/show_notice';
   }
   if ( empty($p) ){

      $pagina='Noticias/show_notice';
     
   } else {
         $pagina = $p;
      }
   include('header.php');

   include('navbar.php');


?>

<section>

<?php 
if($pagina=="logout"){
   unset($_SESSION['adm']);
   header("location:../index.php");
}else{
   include("$pagina.php");
}
?>
</section>

<?php
include('footer.php');
}else{
   include("header.php");
   echo'<div class="alert alert-danger" role="alert">Você não tem acesso a essa página!</div>';
   include('footer.php');
}
?>