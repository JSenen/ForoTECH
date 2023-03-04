<?php
	session_start();
 
	require_once 'model/conectionDB.php';
 
	if(ISSET($_POST['login'])){
		if($_POST['nombre'] != "" || $_POST['passwrd'] != ""){
			$nombre = $_POST['nombre'];
			$password = $_POST['passwrd'];
			$sql = "SELECT * FROM `usuarios` WHERE `nombre`=? AND `passwrd`=? ";
			$query = $dbh->prepare($sql);
			$query->execute(array($nombre,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['user'] = $fetch['id'];
				header("location: home.php");
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'index.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'index.php'</script>
			";
		}
	}
?>