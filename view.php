<?php
    function render($dicci,$template){
        $fichero = file_get_contents($template);
        foreach($dicci as $key=>$value){
            $fichero = str_replace('{'.$key.'}',$value,$fichero);
        }
        $ruta=explode(".php", $_SERVER['PHP_SELF'])[0].".php";
        $fichero = str_replace('{ruta}', $ruta, $fichero);
        echo $fichero;
    }
?>