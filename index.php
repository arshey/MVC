<?php
//On génère une constante qui contiendra le chemin vers index.php
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));//cette ligne nous permet tout simplement de supprimer index.php lorsqu'on appelera $_SERVER['SCRIPT_FILENAME']


//On sépare les paramètres
$params = explode('/', $_GET['p']);

//Est-ce qu'un paramètre existe
if($params[0] != ""){
     $controller = ucfirst($params[0]); //ucfirst met la première valeur en Majuscule
     
     $action = isset($params[1]) ? $params[1] : 'index';//Ici on va recupérer le second paramètre passer en url

     require_once(ROOT.'controllers/'.$controller.'.php');//Cette ligne part du serveur et rendre dans le dossier controller puis sélectionne le controller qui s'y trouve 

     $controller = new $controller();//On va tout simplement maintenant instancier le controller  Ex: articles = new Articles()

     //'method_exists' permet de vérifier si une méthode existe dans le controller
     if(method_exists($controller, $action)){
        $controller->$action();// En gros normallement en POO on devrait avoir $articles->index() mais vu que tout ceux ci son optionnel alors on opte pour ceux présent
     }else{
        http_response_code(404);
        echo "error 404 <br> Page not found! <br>";
        echo "l'action  \"".strtoupper($params[1])."\" n'existe pas dans le controller " .strtoupper($params[0]);
     }

     
}else{


}