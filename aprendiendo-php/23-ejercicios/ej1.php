<?php
session_start();

if (!isset($_SESSION['cont'])) {
    $_SESSION['cont'] = 0;
}

switch ($_GET['counter'] ) {
    case '1':
        $_SESSION['cont']++;
        break;
    case '0':
        $_SESSION['cont']--;
        break;
    case 'reset':
        $_SESSION['cont'] = 0;
        break;
}

?>

<h3>El valor del contador es: <?php echo $_SESSION['cont']?> </h3>
<a href="ej1.php?counter=1">Aumentar</a>
<a href="ej1.php?counter=0">Disminuir</a>
<a href="ej1.php?counter=reset">Reset</a>


