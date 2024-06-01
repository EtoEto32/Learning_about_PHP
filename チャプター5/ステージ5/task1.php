<?php
$item = array(
	"ショートソード" => 2000,
	"ロングソード" => 5000,
	"鉄の盾" => 1600,
	"鎖かたびら" => 2800
);

// ここから下に記述
foreach ($item as $key=>$value){
    echo $key."は".$value."円です。\n";
}
?>
