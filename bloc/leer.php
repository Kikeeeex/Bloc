<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    <div class="center">
        <?php
        if (isset($_GET['archivo'])) {
            $archivo = $_GET['archivo'];

            if (file_exists($archivo)) {
                $contenido = file_get_contents($archivo);
                echo "<h2>Contenido de " . basename($archivo) . ":</h2>";
                echo "<pre>" . $contenido . "</pre>";
            } else {
                echo "El archivo no existe.";
            }
        } else {
            echo "Archivo no especificado.";
        }
        ?>
    </div>
</body>
</html>

