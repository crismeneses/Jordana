<?php
include('../librerias.php');

/*
 * Verificaci�n del usuario y clave
* */
session_start();
if (!isset($_SESSION["oUsuario"])){
?>
<!-- Reenvio a la p�gina principal-->
<script>
	document.location.href="index.php";
</script>
<?php 
}
?>