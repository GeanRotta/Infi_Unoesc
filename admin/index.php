<?php
$caminho = "http://localhost/docs/Infi_Unoesc/admin/";

if(isset($_GET['p'])){
$p=$_GET['p'];
}else{
   //if( /*sessao nao existe*/ ){
      $p='login';
   //}else{
   //   $p='show_home';
   //}
}
if ( empty($p) ){
  //if(/*sessao nao existe*/){
   $pagina='login';
  //}else{
  // $pagina='show_home';
  //}
} else {
		$pagina = $p;
	}
require('header.php');
if($pagina!="login"){
require('navbar.php');
}

?>
<section>

<?php 
if($pagina=="logout"){
   header("location:../index.php");
}else{
   include("$pagina.php");
}
?>
</section>

<?php
include('footer.php')
?>