<?php
if (isset($_POST['contenido']) && isset($_POST['nombre_archivo']) && isset($_POST['carpeta'])) {
    $contenido = $_POST['contenido'];
    $nombre_archivo = 'carpetas/' . $_POST['carpeta'] . '/' . $_POST['nombre_archivo'] . '.txt';

    file_put_contents($nombre_archivo, $contenido);
    header('Location: index.php');
} else {
    echo "Error al guardar el archivo.";
}
?>

