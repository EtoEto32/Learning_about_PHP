<?php
// 2次元配列で地図を表示する２
$mapRow = array_fill(0, 20, "森");
$landMap = array_fill(0, 10, $mapRow);

$landMap[0][0] = "城";
$landMap[0][19] = "町";
$landMap[9][19] = "町";

foreach ($landMap as $i => $row) {
    echo $i.":";//改行しないから行頭に置ける。
    foreach ($row as $j => $column) {
        if($i%2 == 0 && $column=="森"){
            $landMap[$i][$j]="＋";
        }
        echo $landMap[$i][$j];
    }
    echo "\n";
}
?>
