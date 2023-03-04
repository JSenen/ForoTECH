<?php
	session_start();
	require_once 'conectionDB.php';
 
	if(ISSET($_POST['register'])){
		if($_POST['nombre'] != "" || $_POST['apellidos'] != "" || $_POST['passwrd'] != "" || $_POST['email'] != ""){
			try{
				$apellidos = $_POST['apellidos'];
				$email = $_POST['email'];
				$nombre = $_POST['nombre'];
				// md5 encrypted
				// $password = md5($_POST['password']);
				$passwrd = $_POST['passwrd'];
				$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO `usuarios` (`nombre`, `apellidos`, `email`, `passwrd`)VALUES ('$nombre', '$apellidos', '$email', '$passwrd')";
				$dbh->exec($sql);
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			//A la SESSION le asignamos un mensaje para mostrar en la página de login
			$_SESSION['message']=array("text"=>"Usuario creado con exito.","alert"=>"info");
			$dbh = null;
			header('location:../index.php');
		}else{
			echo "
				<script>alert('POr favor, rellene los campos requeridos!')</script>
				<script>window.location = 'registration.php'</script>
			";
		}
	}
?>


