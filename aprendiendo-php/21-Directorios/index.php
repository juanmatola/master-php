<?php

//Crear directorios
if (!is_dir('mi_carpeta')) {
    mkdir('mi_carpeta', 0777) or die('No pude crear la carpeta');
}else{
    echo 'Dicho directoria ya existe';
}


//Eliminar directorios
//rmdir('mi_carpeta');

echo '<hr><h2>Contenido de Carpeta:</h2>';

//Recorrer contenido de directorios
if ($gestor = opendir('mi_carpeta')) {
    while(($content = readdir($gestor)) !== false){
        if ($content != '.' && $content != '..') {
            echo $content.'</br>';
        }
    }
}