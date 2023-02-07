<?php
// Recuperamos los datos ingresados en el formulario
$user=$_POST['user'];
$pass=$_POST['pass'];

// Iniciamos la sesión
session_start();

// Almacenamos el nombre de usuario en la sesión
$_SESSION['user'] = $user;

// Incluimos el archivo de conexión a la base de datos
include_once('./db.php');

// Creamos la consulta para seleccionar los usuarios con los datos ingresados
$consulta = "SELECT * FROM usuarios where user='$user' and pass='$pass'";

// Ejecutamos la consulta y almacenamos el resultado en una variable
$resultado = mysqli_query($conn, $consulta);

// Contamos las filas resultantes de la consulta
$filas = mysqli_num_rows($resultado);

// Si hay alguna fila resultante, significa que el usuario ha sido encontrado
if($filas){
    // Redirigimos al usuario a la página index.php
    header("location:index.php");
}
else{
    // Si el usuario no ha sido encontrado, mostramos un mensaje de error y volvemos a mostrar el formulario de inicio de sesión
    include("login.php");
    echo "<h1>Error en la autenticación</h1>";
}

// Liberamos los resultados de la consulta
mysqli_free_result($resultado);

// Cerramos la conexión a la base de datos
mysqli_close($conn);
?>
