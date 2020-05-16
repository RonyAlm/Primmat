<?php 

	class consulta{

		public function select_tipo_usuario(){

			$filas = null;
			$modelo = new conexion();
			$conexion = $modelo->retornar_conexion();
			$sql = "SELECT * FROM tipo_usuario";
			$statement = $conexion->prepare($sql);
			$statement->execute();

			while($resultado = $statement->fetch()){
				$filas[] = $resultado;
			}
			return $filas;
		}	

		public function insertar_usuario($arg_user, $arg_pass, $arg_rela_tipo_usuario){

			$mensaje = null;
			$modelo = new conexion();
			$conexion = $modelo->retornar_conexion();
			$sql = "INSERT INTO usuario (user_name, password, rela_tipo_usuario) VALUES(:user, :pass, :rela_tipo_usuario)";

			$statement = $conexion->prepare($sql);
			$statement->bindParam(':user', $arg_user);
			$statement->bindParam(':pass', $arg_pass);
			$statement->bindParam(':rela_tipo_usuario', $arg_rela_tipo_usuario);	
			
			if(!$statement){
				header('Location: ../../index.php?mensaje=1');
			}else{
				$statement->execute();
				header('Location: ../../index.php?mensaje=2');
				
			}
		}

		public function insertar_persona($arg_nombre_persona, $arg_apellido_persona, $arg_fecha_nacimiento, $arg_email_persona, $arg_rela_usuario){
			
			$modelo = new conexion();
			$conexion = $modelo->retornar_conexion();
			$sql = "INSERT INTO persona (nombre_persona, apellido_persona, fecha_nacimiento, email_persona, rela_usuario) VALUES(:nombre, :apellido, :fecha_nacimiento, :email, :rela_usuario)";

			$statement = $conexion->prepare($sql);
			$statement->bindParam(':nombre', $arg_nombre_persona);
			$statement->bindParam(':apellido', $arg_apellido_persona);
			$statement->bindParam(':fecha_nacimiento', $arg_fecha_nacimiento);
			$statement->bindParam(':email', $arg_email_persona);
			$statement->bindParam(':rela_usuario', $arg_rela_usuario);		
			
			if(!$statement){
				return "Error al crear el registro";
			}else{
				$statement->execute();
			}
		}
			public function mostrar_alumno(){

			$filas = null;
			$modelo = new conexion();
			$conexion = $modelo->retornar_conexion();

			$sql = "SELECT persona.id_persona, persona.apellido_persona, persona.nombre_persona, grado.desc_grado FROM persona, puntajes, grado WHERE puntajes.rela_persona=persona.id_persona and puntajes.rela_grado=grado.id_grado and puntajes.rela_grado=grado.id_grado";

			$statement = $conexion->prepare($sql);
			$statement->execute();

			while($resultado = $statement->fetch()){
				$filas[] = $resultado;
			}
			return $filas;
		}	
		public function select_tema(){

			$filas = null;
			$modelo = new conexion();
			$conexion = $modelo->retornar_conexion();

			$sql = "SELECT tema.desc_tema, grado.id_grado, puntajes.rela_persona FROM tema, grado, puntajes WHERE tema.rela_grado = grado.id_grado and rela_persona = 1 ";

			$statement = $conexion->prepare($sql);
			$statement->execute();

			while($resultado = $statement->fetch()){
	        $filas[] = $resultado;
			}
			return $filas;
		}	

	}

 ?>