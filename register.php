<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <form action="./insertregister.php" method="post">
        <h1>Registrarse</h1>
        <label for="user">Usuario <input type="text" name="user" id="user" placeholder="Ingrese su usuario"></label>
        <label for="email">Correo <input type="email" name="email" id="email" placeholder="Ingrese su correo"></label>
        <label for="pass">Contraseña <input type="password" name="pass" id="pass" placeholder="Crea una contraseña"></label>
        <input type="submit" value="Registrarse">
    </form>

    <span>Ya tienes cuenta? <a href="./login.php">Iniciar Sesion</a></span>
</body>
</html>