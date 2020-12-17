<?php
//abrir archivo
$archivo = fopen("fichero_texto.txt", "r"); //ruta, modo

//Leer contenido de primer linea
$contenido = fgets($archivo);

//muestro contenido

//solo muestra la primer linea
echo $contenido.'</br>';

$contenido = fgets($archivo); //si vuelvo a ejecutar fgets trae la siguiente linea
echo $contenido; //linea 2

//cerrar archivo
fclose($archivo);


//Mostrar todas las lineas (linea a linea)
$archivo = fopen("fichero_texto.txt", "a+");


while(!feof($archivo)){  //fof devuelve true si el puntero a un archivo está al final del archivo
    $contenido = fgets($archivo);
    echo $contenido.'</br>'; 
}

//Escribir en el archivo
fwrite($archivo, "Soy un texto exrito desde php");

while(!feof($archivo)){  //fof devuelve true si el puntero a un archivo está al final del archivo
    $contenido = fgets($archivo);
    echo $contenido.'</br>'; 
}

//cerrar archivo
fclose($archivo);

//Copiar ficheros

//copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar un fichero");

//Renombrar ficheros

//rename('fichero_copiado.txt', 'archivo_renombrado.txt');

//Eliminar ficheros

//unlink('archivo_renombrado.txt') or die('Error al borrar el archivo');

//Preguntar si existe archivo

if(file_exists('fichero_texto.txt')){
    echo 'Existe';
}else{
    echo 'No existe';
}