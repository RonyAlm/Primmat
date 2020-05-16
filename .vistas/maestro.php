<?php
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']['rela_tipo_usuario']!="5"){
		header("Location:alumno.php");
	}
}else{
	header('Location:maestro.php');
}  
echo "Bienvenido Maestro ".$_SESSION['usuario']['user_name'] ;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="../salir.php">Cerrar Sesión</a>
</body>
</html>


 