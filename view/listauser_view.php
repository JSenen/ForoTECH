<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro TECH</title>
</head>
<body>
    <a href="addusuarios.php">Nuevo usuario</a>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
        <?php foreach( $usuarios as $usuario): //Recorremos el array $usuarios ?>     
        <tr>
            <td><?php echo $usuario['nombre'] // Mostramos el campo que nos interesa ?> </td>
            <td><?php echo $usuario['apellidos'] ?> </td>
        </tr> 
        <?php endforeach; ?>

    </table>
    
</body>
</html>