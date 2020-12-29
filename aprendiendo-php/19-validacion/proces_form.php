<?php
$error = 'faltan_valores';

if (!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    
    $error = "ok";

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    //Valido Name
    if (!is_string($name) || preg_match("/[0-9]/", $name)) {
        $error = "nombre";
    }
    //Valido LastName
    if (!is_string($lastname) || preg_match("/[0-9]/",$lastname)) {
        $error = "apellido";
    }
    //Valido Age
    if (!is_numeric($age) || !preg_match("/[0-9]+/",$age)) {
        $error = "edad";
    }
    //Valido Email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "email";
    }
    //Valido Password
    if (!is_string($password) || strlen($password) < 8) {
        $error = "contraseña";
    }

}else {
    $error = 'faltan_valores';
}

if($error != 'ok'){
    header('Location: index.php?error='.$error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">  
    <?php if ($error === 'ok' ): ?>
    <h3>Datos Validados correctamente</h3>
        <p><?= $name?></p>
        <p><?= $lastname?></p>
        <p><?= $age?></p>
        <p><?= $email?></p>
        <p><?= $password?></p>
    <?php endif; ?>
    
</body>
</html>