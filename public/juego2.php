<?php
require_once dirname(__FILE__) . "/../config/diccionari.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitJoc'])){
    $juego2 = unserialize($_SESSION['juego2']);
    $juego2['respuestas'][$_POST['pregunta']] = $_POST['question'];
    if (finJuego($juego2['respuestas'])) {
        $bien = 0;
        foreach ($juego2['respuestas'] as $key => $respuesta){
            $correcta = $juego2['preguntas'][$key];
            if ($respuesta == $correcta) {
                $bien++;
            }
        }
        unset($_SESSION['juego2']);
    } else {
        $_SESSION['juego2'] = serialize($juego2);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['resetJoc'])){
    $_SESSION['diccionari'] = $_SESSION['diccionari'] ?? serialize($diccionari);
    $juego2['preguntas'] = triaParaules(unserialize($_SESSION['diccionari']),5);
    foreach ($juego2['preguntas'] as $key => $value){
        $juego2['respuestas'][$key] = NULL;
    }
    $_SESSION['juego2'] = serialize($juego2);
}
