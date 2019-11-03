<?php
//On génère une constante qui contiendra le chemin vers index.php
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));//cette ligne nous permet tout simplement de supprimer index.php lorsqu'on appelera $_SERVER['SCRIPT_FILENAME']


//On sépare les paramètres
$params = explode('/', $_GET['p']);

//Est-ce qu'un paramètre existe
if($params[0] != ""){
     $controller = ucfirst($params[0]); //ucfirst met la première valeur en Majuscule
     
     $action = isset($params[1]) ? $params[1] : 'index';//Ici on va recupérer le second paramètre passer en url

     require_once(ROOT.'controllers/'.$controller.'.php');

     $controller = new $controller();

     $controller->$action();
}else{

}