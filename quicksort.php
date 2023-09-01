<?php
function quickSort($arr) {
    $length = count($arr);

    if ($length <= 1) {
        return $arr;
    }

    $pivot = $arr[0];
    $left = $right = array();

    for ($i = 1; $i < $length; $i++) {
        if ($arr[$i] < $pivot) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }

    return array_merge(quickSort($left), array($pivot), quickSort($right));
}

$zahlen = array(20, 10, 19, 9, 18, 8, 17, 7, 16, 6, 15, 5, 14, 4, 13, 3, 12, 2, 11, 1);
$sortierteZahlen = quickSort($zahlen);

echo "Sortierte Zahlen: ";
foreach ($sortierteZahlen as $zahl) {
    echo $zahl . " ";
}
?>
