<?php 
function saring($array) {
    $hasil = [];

    foreach ($array as $elemen) {
        if (!is_numeric($elemen)) {
            return "Error: Semua elemen harus berupa angka.";
        }
        
        if (is_float($elemen)) {
            continue;
        }

        if ($elemen % 2 != 0) {
            $hasil[] = $elemen;
        }
        
    }

    return $hasil;
}

$array = [1, 2, 3, 4, 5.5, 7.6, 9];
// $error = [1, 2, 3, 4, 5.5, 7.6, 9, 'ara'];

print_r(saring($array));
// print_r(saring($error));





?>