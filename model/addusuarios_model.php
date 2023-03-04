<?php
// crear el nuevo formulario de nuevo registro
function renderForm($nombre, $apellidos, $email, $passwrd, $rol, $error)
{
include ('view/addusuarios_view.php'); 
?>

<?php
}
// conectar a la base de datos
require('conectionDB.php');
// Comprueba si el formulario ha sido enviado.
// Si se ha enviado, comienza el proceso el formulario y guarda los datos en la DB
if (isset($_POST['submit'])) {
    // Obtenemos los datos del formulario, asegur�ndonos que son v�lidos.
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellidos = htmlspecialchars($_POST['apellidos']);
    $email = htmlspecialchars($_POST['email']);
    $passwrd = htmlspecialchars($_POST['passwrd']);
    $rol = htmlspecialchars($_POST['rol']);
        try {
            $stmt = $dbh->prepare("INSERT INTO usuarios (nombre, apellidos, email, passwrd, rol) VALUES (:nombre, :apellidos, :email, :passwrd, :rol)");

            $stmt->bindParam(':nombre', $_POST['nombre'], PDO::PARAM_STR);
            $stmt->bindParam(':apellidos', $_POST['apellidos'], PDO::PARAM_STR);
            $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
            $stmt->bindParam(':passwrd', $_POST['passwrd'], PDO::PARAM_STR);
            $stmt->bindParam(':rol', $_POST['rol'], PDO::PARAM_STR);

            $stmt->execute();

        }
// guardamos los datos en la base de datos
        catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
/* Una vez que han sido guardados, redirigimos a la p�gina de vista principal*/
        header("Location: index.php");

}else{
    renderForm('','','','','','');
}

?>