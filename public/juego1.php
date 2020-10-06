<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitMitjana'])){
    if (!is_numeric($_POST['numero']) || !is_int((int)$_POST['numero'])){
        $errors['numero'] = 'Introdueix numero sencer';
    }
    else {
        if ($_POST['numero'] > 0 ){
            $_SESSION['juego1'][] = $_POST['numero'];
        } else {
            $mitjana = mitjana($_SESSION['juego1']);
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['resetMitjana'])){
    $_SESSION['juego1'] = array();
}