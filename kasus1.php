<?php
function perkalian($sisi){
    if ($sisi > 0) {
        return $sisi * $sisi;
    }
    else {
        echo "ERROR!";
    }
}

echo perkalian(5);







?>