<?php
// 連想配列の基本操作
$item=array(
    "ロングソード"=>2,
    "鉄の盾" => 1
);
$item["クリスタル"]=6;
print_r($item);
unset($item["鉄の盾"]);
print_r($item);

?>
