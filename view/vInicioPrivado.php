<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <img class="aplicacion" src="doc/aplicacion.png" alt="aplicacion">
    <div class="descripcion-usuario">
        <?php
            // Mostrar el nombre del usuario en mayúsculas
            echo $nombreUsuario;
        ?>
    </div>
    <p id="mensaje-bienvenida">
        <?php
            // Mostrar el mensaje de bienvenida
            echo $mensaje;
        ?>
    </p>
    <form action="" method="POST">
        <input type="submit" name="cerrarsesion" value="Cerrar Sesión">
    </form>
</body>
</html>
