<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario sin ajax</title>
</head>
<body>
<h2>formulario sin ajax</h2>

    <h2>Datos guardados:</h2>
    <div id="datosGuardados">
        <?php
        $archivo = "datos.txt";
        if (file_exists($archivo)) {
            $contenido = file_get_contents($archivo);
            echo nl2br($contenido); // nl2br convierte los saltos de línea en etiquetas <br> para mostrarlos en HTML
        } else {
            echo "No hay datos guardados.";
        }
        ?>
    </div>
    <br>
    <form action="notas.php" method="post">
        <label for="dato">Ingrese un dato:</label><br>
        <input type="text" id="dato" name="dato"><br><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>