<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    <div class="center">
        <?php
        if (isset($_GET['carpeta'])) {
            $carpeta = 'carpetas/' . $_GET['carpeta'];

            if (is_dir($carpeta)) {
                echo "<h2>Contenido de la carpeta: " . $_GET['carpeta'] . "</h2>";
                $archivos = scandir($carpeta);

                echo "<ul>";
                foreach ($archivos as $archivo) {
                    if ($archivo !== "." && $archivo !== "..") {
                        echo "<li><a href='leer.php?archivo=" . $carpeta . "/" . $archivo . "'>" . $archivo . "</a></li>";
                    }
                }
                echo "</ul>";
            } else {
                echo "La carpeta no existe.";
            }
        } else {
            echo "Carpeta no especificada.";
        }
        ?>
    </div>
</body>
</html>

