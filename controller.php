<?php
require_once('model.php');
require_once('view.php');

//render($diccionario,'templates/template00.html');
//render($diccionario2,'templates/template01.html');

$action_array=explode(".php",$_SERVER['REQUEST_URI']);
$action=$action_array[1];

switch($action){
    case "/articulo":
        render($diccionario,'templates/template00.html');
        break;
    case "/foto":
        render($diccionario2,'templates/template01.html');
        break; 
    default:
        render($diccionario3,'templates/template02.html');
        break;
}
/*
if(){
    //articulo
}elseif(){
    //foto
}else{
    //default
}
*/
?>