<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitMitjana'])){
    $juego = unserialize($_SESSION['juego1']);
    if (!is_numeric($_POST['numero']) || !is_int((int)$_POST['numero'])){
        $errors['numero'] = 'Introdueix numero sencer';
    }
    else {
        if ($_POST['numero'] > 0 ){
            $juego[] = $_POST['numero'];
            $_SESSION['juego1'] = serialize($juego);
        } else {
            $mitjana = mitjana($juego);
            unset($_SESSION['juego1']);
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['resetMitjana'])){
    $_SESSION['juego1'] = serialize(array());
}