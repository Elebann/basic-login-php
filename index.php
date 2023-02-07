<?php
session_start();
$print_user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index | Login Funcional</title>
</head>
<body>
    <h1>Bienvenido <?php echo $print_user?></h1>
</body>
</html>