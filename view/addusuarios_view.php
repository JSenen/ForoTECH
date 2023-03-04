
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Nuevo Registro</title>
    </head>
    <body>
    <?php

    // Si hay errores, los muestra en pantalla
    if ($error != '') {
        echo '<div style="padding:4px; border:1px solid red;color:#ff0000;">' . $error . '</div>';
    }
    ?>
    <form action="" method="post">
        <div>
            <strong>Nombre:</strong> <input type="text" name="nombre" value="<?php echo $nombre; ?>"
            /><br/>
            <strong>Apellidos:</strong> <input type="text" name="apellidos" value="<?php echo $apellidos; ?>"
            /><br/>
            <strong>Email:</strong> <input type="text" name="email" value="<?php echo $email; ?>"
            /><br/>
            <strong>Password:</strong> <input type="password" name="passwrd" value="<?php echo $passwrd; ?>"
            /><br/>
            <strong>Rol:</strong> <input type="text" name="rol" value="<?php echo $rol; ?>"/>
            <br/>
            <input type="submit" name="submit" value="Grabar">
        </div>
    </form>
    </body>
    </html>
