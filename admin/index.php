<?php
$caminho = "http://localhost/docs/Infi_Unoesc/admin/";
if(isset($_GET['p'])){
$p=$_GET['p'];
}else{
   //if(isset($_SESSION['adm'])){
      $p='Noticias/show_notice';
   //}else{
     // $p='login';
   //}
}
if ( empty($p) ){
  //if(isset($_SESSION['adm'])){
   $pagina='Noticias/show_notice';
  //}else{
   //$pagina='login';
// }
} else {
		$pagina = $p;
	}
include('header.php');
//echo $_SESSION['adm']?"sessao":"essa porra ta bugada";
//f(isset($_SESSION['adm'])){
include('navbar.php');
//}

?>

<section>

<?php 
if($pagina=="logout"){
   //unset($_SESSION['adm']);
   header("location:../index.php");
}else{
   include("$pagina.php");
}
?>
</section>

<?php
include('footer.php')
?>