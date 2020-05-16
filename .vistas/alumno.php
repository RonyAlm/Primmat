<?php

session_start();
if(isset($_SESSION['usuario'])){

	if($_SESSION['usuario']['rela_tipo_usuario']!="6"){
		header("Location:maestro.php");
	}

}else{
	header('Location:alumno.php');
}  
echo "Bienvenido Alumno ".$_SESSION['usuario']['user_name'] ;

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


 