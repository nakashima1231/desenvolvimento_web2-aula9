<?php 
    session_start();

    if(empty($_SESSION)) {
        echo 'nao logou';
    } else {
        echo $_SESSION['nome'];
    }



?>