<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el dato del formulario
    $dato = $_POST["dato"];

    // Comprobar si se ha ingresado algún dato
    if (!empty($dato)) {
        // Guardar el dato en un archivo de texto
        $archivo = "datos.txt";
        $contenido = $dato . PHP_EOL; // Agregar un salto de línea al final de cada dato

        // Abrir el archivo en modo de escritura
        if ($fp = fopen($archivo, "a")) { // El modo "a" abre el archivo para escritura, y si no existe, intenta crearlo.
            // Escribir en el archivo
            fwrite($fp, $contenido);
            // Cerrar el archivo
            fclose($fp);
            echo "El dato se ha guardado correctamente en $archivo.";
            header("Location: index.php");
        } else {
            echo "No se pudo abrir el archivo $archivo para escribir.";
        }
    } else {
        echo "Por favor, ingrese un dato.";
    }
} else {
    echo "Acceso denegado.";
}

?>