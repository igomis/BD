<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitAfegir'])){
    $diccionari = isset($_SESSION['diccionari'])?unserialize($_SESSION['diccionari']):$diccionari;
    $diccionari[$_POST['valencia']] = $_POST['angles'];
    $_SESSION['diccionari'] = serialize($diccionari);
    $darrera = $_POST['angles'];
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['resetAfegir'])){
    unset ($_SESSION['diccionari']);
}