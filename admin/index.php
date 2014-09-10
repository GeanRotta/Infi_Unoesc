<?php
$caminho = "http://localhost/docs/Infi_Unoesc/admin/";

if(isset($_GET['p'])){
$p=	$_GET['p'];
}else{$p='login';}

if ( empty($p) ){
		$pagina = "login";
	} else {
		$pagina = $p;
	}

require('header.php');
?>
<section>

<?php include("$pagina.php") ?>

</section>

<?php
include('footer.php')
?>