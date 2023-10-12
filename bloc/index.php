<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    <div class="center">
        <h1>Bloc de Notas</h1>

        <form action="crear_carpeta.php" method="post">
            <h2>Crear Carpeta</h2>
            <input type="text" name="nombre_carpeta" placeholder="Nombre de la carpeta">
            <input type="submit" value="Crear carpeta">
        </form>

        <form action="guardar.php" method="post">
            <h2>Crear Archivo</h2>
            <input type="text" name="nombre_archivo" placeholder="Nombre del archivo">
            <textarea name="contenido" rows="10" cols="40"></textarea>
            <label for="carpeta">Selecciona una carpeta:</label>
            <select name="carpeta">
                <?php
                $directorio = 'carpetas/';
                $carpetas = array_diff(scandir($directorio), array('..', '.'));

                foreach ($carpetas as $carpeta) {
                    echo "<option value='$carpeta'>$carpeta</option>";
                }
                ?>
            </select>
            <input type="submit" value="Guardar archivo">
        </form>

        <h2>Carpetas:</h2>
        <ul>
            <?php
            foreach ($carpetas as $carpeta) {
                echo "<li><a href='leer_carpeta.php?carpeta=" . $carpeta . "'>" . $carpeta . "</a></li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>


