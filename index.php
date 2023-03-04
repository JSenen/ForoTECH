<!-- Página de entrada a la aplicación -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
	
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - PDO Login and Registration</h3>
		<div class="col-md-2"></div>
		<div class="col-md-8">
		<!-- Campo de mensaje de nuevo registro -->
		<?php if(isset($_SESSION['message'])): ?>
				<div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
			<script>
				(function() {
					// Despues de 3 segundos de cargar la página, el mensaje desaparece (Javascript)
					setTimeout(function(){
						document.querySelector('.msg').remove();
					},3000)
				})();
			</script>
			<?php 
				endif;
				// limpiamos el mensaje
				unset($_SESSION['message']);
			?>
      <!-- Formulario de login -->
			<form action="model/login_query.php" method="POST">	
				<h4 class="text-success">Introduce nombre y contraseña...</h4>
				<hr style="border-top:1px groovy #000;">
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" class="form-control" name="nombre" />
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="text" class="form-control" name="passwrd" />
				</div>
				<br />
				<div class="form-group">
					<button class="btn btn-primary form-control" name="login">Login</button>
				</div>

        <!-- Enlace al registro de usuario -->
				<a href="view/registration.php">Registrarse</a>
			</form>
		
    </div>
	</div>
</body>
</html>