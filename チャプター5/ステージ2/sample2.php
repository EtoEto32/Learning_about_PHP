<?php
// 配列の並び替え
$item = array("イージスシールド", "ウィンドスピア", "アースブレイカー");
print_r($item);
sort($item);
print_r($item);
//1つ目の文字が同じだったら、次の文字を見る。
rsort($item);
print_r($item);
?>
