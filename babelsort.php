<?php
function babelSort($arr) {
    $n = count($arr);
    $swapped = true;

    while ($swapped) {
        $swapped = false;
        for ($i = 0; $i < $n - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                // Tausche die beiden Zahlen
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
                $swapped = true;
            }
        }
    }

    return $arr;
}

$zahlen = array(20, 10, 19, 9, 18, 8, 17, 7, 16, 6, 15, 5, 14, 4, 13, 3, 12, 2, 11, 1);
$sortierteZahlen = babelSort($zahlen);

echo "Sortierte Zahlen: ";
foreach ($sortierteZahlen as $zahl) {
    echo $zahl . " ";
}
?>
