<?php

if ( isset ( $_GET['iteration'] ) ){
    if ($_GET['iteration'] > 50){
        echo "Tricheur";
    }
    else {
        for ($i = 0; $i < $_GET['iteration']; $i++){
            echo "Hello <br>";
        }
    }
}




?>