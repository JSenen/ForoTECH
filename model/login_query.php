<?php
/** Archivo se encarga de coprobar que el usuario y la clave 
*		se encuentran en la base de datos */
	session_start();														//Iniciamos sesion
 
	require_once 'conectionDB.php';							//Incluimos la conexión a la base de datos
 
	if(ISSET($_POST['login'])){									//Recibe datos del formulario login en index.php
		if($_POST['nombre'] != "" || $_POST['passwrd'] != ""){				//Parametros del formulario
			$nombre = $_POST['nombre'];																		
			$password = $_POST['passwrd'];															
			$sql = "SELECT * FROM `usuarios` WHERE `nombre`=? AND `passwrd`=? ";		//Consulta SQL a la Base de Datos
			$query = $dbh->prepare($sql);
			$query->execute(array($nombre,$password));
			$row = $query->rowCount();																							//Contamos número de filas que devuelve la consulta
			$fetch = $query->fetch();
			if($row > 0) {																													//Siempre que sean >0, el usuario esta en la base
				$_SESSION['user'] = $fetch['id'];																			//Asignamos a la sesion del usuario el campo de id
				header("location: ../view/home.php");																					//Lo redirigimos a la página pricipal
			} else{
				//Javascript para ventana emergante en caso de error
				echo "
				<script>alert('Invalid username or password')</script>								
				<script>window.location = '../index.php'</script>
				";
			}
		}else{
			//Javascript para ventana emergente en caso de falte un campo
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = '../index.php'</script>
			";
		}
	}
?>