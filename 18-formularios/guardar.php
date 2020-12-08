<?php
    if(isset($_POST['title']) && isset($_POST['description'])){
        echo '<h1>'.$_POST['title'].'</h1></br>'.$_POST['description'];
    }else{
        echo 'No se recibieron los datos';
    }