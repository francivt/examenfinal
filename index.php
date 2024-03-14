<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

<script>
    
        window.onload = function() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "$archivo", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("datosGuardados").innerHTML = xhr.responseText;
                    
                }
            };
            xhr.send();
        };
    </script>
    <h2>Notas guardadas:</h2>
    <div id="datosGuardados"></div>
    <?php
$archivo = "datos.txt";
if (file_exists($archivo)) {
    $contenido = file_get_contents($archivo);
    $contenido_con_saltos = str_replace(PHP_EOL, "\n", $contenido);
    echo nl2br($contenido_con_saltos); // nl2br convierte los saltos de línea en etiquetas <br> para mostrarlos en HTML
} else {
    echo "No hay datos guardados.";
}
?>
    <br>
    <form action="notas.php" method="post">
        <label for="dato">Ingrese un dato:</label><br>
        <input type="text" id="dato" name="dato"><br><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>