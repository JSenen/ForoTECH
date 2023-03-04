<?php
require ('conectionDB.php'); //Conexion a la base de datos

$result = $dbh->query('SELECT nombre,apellidos,email,passwrd FROM usuarios'); //Sentencia SQL
$usuarios = array();                                            //Creamos array de usuarios
while ($usuario = $result -> fetch()) {                         // Bucle recorre la BD
    $usuarios[] = $usuario;                                     // Asigna usuarios en la array
}
