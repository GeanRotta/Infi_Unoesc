<?php
$caminho = "http://localhost/docs/Infi_Unoesc/admin/";

if(isset($_GET['p'])){
$p=	$_GET['p'];
}else{$p='cad_not';}

if ( empty($p) ){
		$pagina = "cad_not";
	} else {
		$pagina = $p;
	}

require('header.php');
?>
<section>
<br/>
<?php include("$pagina.php") ?>

</section>

<?php
include('footer.php')
?>