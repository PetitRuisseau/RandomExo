<?php


$taille = 100;
$sapin = [];
$modulo = 0;
for ($ligne = 0; $ligne < $taille; $ligne++) {
        $sapin[$ligne] = [];
        if ($ligne % 8 == 0) {
            $modulo = $modulo + 1;
        }
        $nbespace = $taille - 30 - $ligne + ($modulo * 3);
        for($caractere = $nbespace; $caractere >= 0; $caractere--) {
            $sapin[$ligne][$caractere] = " ";
        }
        $nbetoile = ($ligne * 2) + 1 - ($modulo * 6); 
        for ($caractere = $nbespace; $caractere < ($nbespace + $nbetoile); $caractere++) {
            if (rand(0,20) == 6) {
                $sapin[$ligne][$caractere] = "0";
            } else {
            $sapin[$ligne][$caractere] = "*";
            }
        }
    }
echo "<pre>";
for ($i = 0; $i < count($sapin); $i++) {
    for ($j = 0; $j < count($sapin[$i]); $j++) {
        echo $sapin[$i][$j];
    }
    echo "</br>";
}
echo "</pre>";

?>