<?php
$item_img = array(
    "剣" => "http://paiza.jp/learning/images/sword.png",
    "盾" => "http://paiza.jp/learning/images/shield.png",
    "回復薬" => "http://paiza.jp/learning/images/potion.png",
    "クリスタル" => "http://paiza.jp/learning/images/crystal.png"
);
// ここから下に記述
$order=array();
while($input=fgets(STDIN)){
    $input=trim($input);
    $order[]=$input;
}
foreach ($order as $odr){
    echo "<img src=".$item_img[$odr].">";
}
?>
