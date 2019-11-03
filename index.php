<?php

//On sépare les paramètres
$params = explode('/', $_GET['p']);

//Est-ce qu'un paramètre existe
if($params[0] != ""){
     $controller = ucfirst($params[0]); //ucfirst met la première valeur en Majuscule
     echo $controller;
}else{

}