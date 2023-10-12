<?php
if (isset($_POST['nombre_carpeta'])) {
    $nombre_carpeta = 'carpetas/' . $_POST['nombre_carpeta'];

    if (!is_dir($nombre_carpeta)) {
        mkdir($nombre_carpeta);
    }

    header('Location: index.php');
} else {
    echo "Error al crear la carpeta.";
}
?>
