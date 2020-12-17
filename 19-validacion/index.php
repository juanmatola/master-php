<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación</title>
</head>
<body style="text-align:center;">
    <h1>Validacion de formularios</h1>
    
    <?php
        if (isset($_GET['error'])) {
            echo "<h4 style='color: red;'>*Introduce todos los campos por favor.</h4><p><small>Código de error: {$_GET['error']}</small></p>";
        }
    ?>

    <form action="proces_form.php" method="POST">
        <input type="text" name="name" placeholder="Name" require></br>
        <input type="text" name="lastname" placeholder="Lastname"></br>
        <input type="number" name="age" placeholder="Age"></br>
        <input type="email" name="email" placeholder="E-mail" require></br>
        <input type="password" name="password" placeholder="Password" minlength="8" require></br></br>
        <button type="submit">enviar</button>
    </form>
</body>
</html>