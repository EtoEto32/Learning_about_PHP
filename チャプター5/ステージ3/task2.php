<?php
$rank = array(
	"はぐれ犬" => "2位",
	"オオカミ" => "4位",
	"スライム" => "1位",
	"ゴブリン" => "3位"
);
// $rankのvalueを順位順（１位、２位、、）に並べ替えて
// print_rで出力しましょう
asort($rank);
print_r($rank);
?>
