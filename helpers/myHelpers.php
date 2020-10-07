<?php

function dd($param){
var_dump($param);
    exit();
}

function loadWhoops()
{
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    return $whoops;
}

/**
 * @param array $numeros
 * @return Float
 * Calcula la mitjana d'un array de numeros
 */
function mitjana(Array $numeros):Float
{
    return array_sum($numeros)/count($numeros);
}

/**
 * @param array $diccionari
 * @param $quantitat
 * @return array
 * Torna un array de quantitat elements triats a l'atzar
 */
function triaParaules(Array $diccionari,$quantitat):Array
{

    $keys =  array_rand($diccionari,$quantitat);

    foreach ($keys as $key){
        $aleatorio[$key] = $diccionari[$key];
    }
    return $aleatorio;
}

/**
 * @param array $usuarisValids
 * @param $user
 * @param $password
 * @return bool
 * Torna true si el usuari i el password es troben a usuarisValids
 * Torna false en cas contrari
 */
function login(Array $usuarisValids,$user,$password):bool
{
    return (isset($usuarisValids[$user])) && ($usuarisValids[$user] === $password);
}


function showError($arrayErrors,$field){
    if (array_key_exists($field,$arrayErrors)) {
        return "<div id='nameFeedback' class='invalid-feedback'>".$arrayErrors[$field]."</div>";
    }
    return "";
}

function classError($arrayErrors,$field){
    return array_key_exists($field,$arrayErrors)?'is-invalid':'is-valid';
}

function preguntaActual($array){
    if ($array) {
        foreach ($array as $key => $item) {
            if (!$item) return $key;
        }
    }
}
function finJuego($array){
    foreach ($array as $key => $item){
        if (!$item) return false;
    }
    return true;
}
