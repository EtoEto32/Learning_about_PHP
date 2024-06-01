<?php
// foreachで配列の値を取り出す
//連想配列編

$array = array(
    "勇者"=>41, 
    "魔法使い"=>15, 
    "遊び人"=>23
);
//print_r($array);
foreach($array as $key=>$value){
	echo $key."のHPは<strong>".$value."</strong>です。<br>\n";
}

?>
