<?php
// 標準入力から1行取得
$array=array();
$input=fgets(STDIN);
// カンマで分割して配列に代入
$array=explode(",",$input);
// ランダムの上限値を計算して変数に代入
$max=count($array)-1;
// 配列の中身を出力
print_r($array);
// ランダム出力
$key=rand(0,$max);
print_r($array[$key]);
?>
