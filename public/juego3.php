<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitAfegir'])){
    $_SESSION['diccionari'][$_POST['valencia']] = $_POST['angles'];
    $darrera = $_POST['angles'];
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['resetAfegir'])){
    unset ($_SESSION['diccionari']);
}