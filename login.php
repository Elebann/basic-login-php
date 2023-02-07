<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <form action="./validarlogin.php" method="post">
        <h1>Iniciar Sesión</h1>
        <label for="email">Usuario <input type="text" name="user" id="user" placeholder="Ingrese su usuario"></label>
        <label for="pass">Contraseña <input type="password" name="pass" id="pass" placeholder="Ingrese su contraseña"></label>
        <input type="submit" value="Acceder">
    </form>

    <span>Sin Cuenta? <a href="./register.php">Clic aquí</a></span>
</body>
</html>