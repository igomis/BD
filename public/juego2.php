<?php
require_once dirname(__FILE__) . "/../config/diccionari.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitJoc'])){
    $_SESSION['juego2']['respuestas'][$_POST['pregunta']] = $_POST['question'];
    if (finJuego($_SESSION['juego2']['respuestas'])) {
        $bien = 0;
        foreach ($_SESSION['juego2']['respuestas'] as $key => $respuesta){
            $correcta = $_SESSION['juego2']['preguntas'][$key];
            if ($respuesta == $correcta) {
                $bien++;
            }
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['resetJoc'])){
    $_SESSION['juego2']['preguntas'] = array();
    $_SESSION['juego2']['respuestas'] = array();
    $_SESSION['diccionari'] = $_SESSION['diccionari'] ?? $diccionari;
    $_SESSION['juego2']['preguntas'] = triaParaules($_SESSION['diccionari'],5);
    foreach ($_SESSION['juego2']['preguntas'] as $key => $value){
        $_SESSION['juego2']['respuestas'][$key] = NULL;
    }
}