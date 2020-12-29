<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de archivos</title>
</head>
<body>
    <h1>Subir archivos con php</h1>
    <form action="./upload.php" method="POST" enctype="multipart/form-data">
        <label for="archivo">Archivo a cargar: </label>
        <br>
        <input type="file" name="archivo">
        <br>
        <br>
        <input type="submit" value='Cargar'>
    </form>

    <h2>Listado de imagenes:</h2>
    <?php
        $gestor = opendir('./images');

        if ($gestor == true) {
            while(($img = readdir($gestor)) != false){
                if ($img != '.' && $img != '..') {
                    echo '<img src=images/'.$img.' width="200px"/><br>';
                }
            }
        }
    ?>
</body>
</html>