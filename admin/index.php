<?php
$caminho = "http://localhost/docs/Infi_Unoesc/admin/";

if(isset($_GET['p'])){
$p=	$_GET['p'];
}else{$p='show_notice';}

if ( empty($p) ){
		$pagina = "show_notice";
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