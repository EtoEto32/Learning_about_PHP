<?php
//画像配列
$item_img = array(
    "剣" => "http://paiza.jp/learning/images/sword.png",
    "盾" => "http://paiza.jp/learning/images/shield.png",
    "回復薬" => "http://paiza.jp/learning/images/potion.png",
    "クリスタル" => "http://paiza.jp/learning/images/crystal.png"
);
//アイテムの並び順配列
$item_order = array("剣", "盾", "回復薬","クリスタル");

foreach ($item_order as $item_name){
    echo "<img src=".$item_img[$item_name].">"."<br>";
}

?>
