<?php
// 2次元配列で地図を表示する１
$mapRow = array_fill(0, 20, "森");
$landMap = array_fill(0, 10, $mapRow);

$landMap[0][0] = "城";
$landMap[0][19] = "町";
$landMap[9][19] = "町";

foreach ($landMap as $row) {
    foreach ($row as $column) {
        echo $column;
    }
    echo "\n";
}
?>