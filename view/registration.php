<!DOCTYPE html>
<!-- VISTA PANTALLA DE REGISTRO -->
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">BARRA DE NAVEGACION</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - PDO Login and Registration</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">

			<form action="../model/registerquery.php" method="POST">	
				<h4 class="text-success">Register here...</h4>
				<hr style="border-top:1px groovy #000;">
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" class="form-control" name="nombre" />
				</div>
				<div class="form-group">
					<label>Apellidos</label>
					<input type="text" class="form-control" name="apellidos" />
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control" name="email" />
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="passwrd" />
				</div>
				<br />
				<div class="form-group">
					<button class="btn btn-primary form-control" name="register">Register</button>
				</div>
				<a href="../index.php">Login</a>
			</form>

		</div>
	</div>
</body>
</html>