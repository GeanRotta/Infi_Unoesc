<!-- Arquivo index php para paginas inf unoesc -->
<?php
include_once("var.php");

if(isset($_GET['p'])){
$p=	$_GET['p'];
}else{$p='Home';}

if ( empty($p) ){
		$pagina = "Home";
	} else {
		$pagina = $p;
	}
include_once("header.php");
include_once("navbar.php");
?>

<section>
<?php  include("$pagina/index.php"); ?>
</section>

<?php
include_once("footer.php");
?>