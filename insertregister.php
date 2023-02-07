<?php

// Conexion a la base de datos
include_once("./db.php");

// Verificamos si los datos existen
if (isset($_POST['user']) && isset($_POST['email']) && isset($_POST['pass'])) {
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    // Encriptamos la contraseña para seguridad
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertamos al usuario en la base de datos
    $sql = "INSERT INTO usuarios (id, user, pass, email) VALUES ('', '$username', '$password', '$email')";
    mysqli_query($conn, $sql);

    // Re direccionamos al usuario al login.
    header("location:login.php");
}

?>