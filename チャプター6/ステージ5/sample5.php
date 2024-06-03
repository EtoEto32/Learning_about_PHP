<?php
// 2次元配列をarrayで作成する
$teams=array(
    array("勇者","戦士","魔法使い"),
    array("盗賊","忍者","商人"),
    array("スライム","ドラゴン","魔王")
);
foreach ($teams as $row){
    foreach ($row as $column){
        echo $column." ";
    }
    echo "\n";
}

?>
