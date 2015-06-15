<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include ('librerias.php');
session_start();
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="images/favicon.ico">
    
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/responsive.css" rel="stylesheet" type="text/css" />
    
	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    
	<!-- Scripts -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="js/parallax.js" type="text/javascript"></script>
	<script src="js/myscript.js" type="text/javascript"></script>
        <script src="js/jquery-latest.min.js" type="text/javascript"></script>
        
        <title><?=TITULOAPP?></title>
        
    </head>
    <body>
        <?php   
            include('menubase.php');
            /*
             * * Verificación del usuario y clave
            */
            if (!isset($_SESSION["oUsuario"])){
                include('login/formlogin.php');?>
                
        <form method="post" action="logUser/nuevo_cliente.php">
        <table>
        
        <tr>
            <td>    Nombres:    </td>
            <td> <input type="text" name='nombres' /></td>
        </tr>
        <tr>
            <td>Apellidos:  </td>
            <td><input type="text" name='apellidos' /></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name='email' /></td>
        </tr>
        <tr>
            <td>Direcci&oacute;n: </td>
            <td><input type="text" name='direccion' /></td>
        </tr>
        <tr>
            <td>Tel&eacute;fono:</td>
            <td><input type="text" name='telefono' /></td></tr>
        
        
        <tr>
            <td>Contrase&ntilde;a</td>
            <td><input type="text" name='pass1' /></td>
        </tr>
        
        <tr>
            <td>Repita Contrase&ntilde;a</td>
            <td> <input type="text" name='pass2' /></td>
        </tr>
        <tr>
            <td></td>
            <td> <input type="submit" name='enviar' /></td>
        </tr>
        </table>
        </form>
                    
                    <?php}
                    else{
                        $oUsr=$_SESSION["oUsuario"];
                        ?>
        <!-- Reenvio a la p�gina principal   
        <script> document.location.href="index.php"; </script>-->
        <?php
                }
        ?>
    </body>
</html>
