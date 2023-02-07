<?php

// Credenciales de la base de datos
$host = "localhost";
$username = "root";
$password = "";
$database = "loginfuncional";

// Establecer conexion a la base de datos
$conn = mysqli_connect($host, $username, $password, $database);

// Verificar la conexión > Comentado para no recibir el mensaje de conexion exitosa usado solo para comprobar.

/* if (!$conn) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}

echo "Conexión exitosa"; */

?>