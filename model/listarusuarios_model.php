<?php
$dbname = "forotech";       //Nombre de la Base de Datos
$user = "root";             // Usuario
$password = "root";         // Contraseña
$server = 'localhost';      // Dirección servidor
$dbh ="";

// Con un array de opciones
try {

    $dsn = "mysql:host=$server;dbname=$dbname;charset=UTF8";
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo $e->getMessage();
}
$result = $dbh->query('SELECT nombre,apellidos FROM usuarios');
$usuarios = array();
while ($usuario = $result -> fetch()) {
    $usuarios[] = $usuario;
}
?>