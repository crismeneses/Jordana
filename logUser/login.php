<?php
include '../librerias.php';

$usr=new Usuario("",$_POST['usuario'], $_POST['clave']);

session_start();
if($usr->VerificaAcceso()){
	$_SESSION["oUsuario"]=$usr;
}
?>
<script>
	document.location.href="index.php";
</script>