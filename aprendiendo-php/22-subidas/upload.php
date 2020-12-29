<?php
$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tmp_nombre = $archivo['tmp_name'];
$tipo = $archivo['type'];


if ($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png") {
    if (!is_dir('images')) {
        mkdir('images', 0777);
    }

    $uploadpath = './images/'.$nombre;
    move_uploaded_file($tmp_nombre, $uploadpath);

    echo '<h2>Imagen subida correctamente</h2>';
    echo '<br>';
    echo '<img src='.$uploadpath.'>';
    header("Refresh: 5; URL=index.php");
}else{
    header("Refresh: 5; URL=index.php");
    echo '<h3>Sube una imagen con un formato permitido (JPG, JPEG, PNG)</h3>';
}