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

function getTestConnection(){
    try{
        return new PDO("mysql:host=mysql;dbname=testJocs",'root','root');
    }catch(PDOException $exception){
        echo "Connection error: " . $exception->getMessage();
        return null;
    }
}

function mitjana(Array $numeros):Float
{
    return array_sum($numeros)/count($numeros);
}


function triaParaules(Array $diccionari,$quantitat):Array
{

    $keys =  array_rand($diccionari,$quantitat);

    foreach ($keys as $key){
        $aleatorio[$key] = $diccionari[$key];
    }
    return $aleatorio;
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


/**
 * @param String $user
 * @param String $password
 * @return bool
 * Torna true si el usuari i el password es troben a la BD
 * Torna false en cas contrari
 */
function login(String $user,String $password):bool
{
    return true;
}

/**
 * @param String $user
 * @param String $pass1
 * @param String $pass2
 * @return bool
 * Torne true si l'usuari s'ha registrat
 * Torna false en cas contrari
 */
function register(String $user,String $pass1,String $pass2):bool
{
    return true;
}

/**
 * @param String $valencia
 * @param String $angles
 * @return bool
 * Torna true si la paraula ha sigut afegida al diccionari
 * Torna false en cas contrari
 */
function addWord(String $valencia,String $angles):bool
{
    return true;
}


/**
 * @param String $valencia
 * @return mixed
 * Retorna la paraula en angles
 * Si no existeis torna false
 */
function getWord(String $valencia)
{
    return true;
}

/**
 * @param String $valencia
 * @param String $angles
 * @return bool
 * Retorna true si s'ha pogut esborrar i false si no
 */
function delWord(String $valencia,String $angles):bool
{
    return true;
}