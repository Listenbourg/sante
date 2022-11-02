<?php

    function loadController($name){
        $path = "controllers/".$name.".php";
        echo file_get_contents($path);
    }

    function loadView($name){
        $path = "views/".$name.".html";
        echo "<div id='".$name."'>".file_get_contents($path)."</diV";
    }

?>