<?php
// 標準入力から値をループで取得
while($input = trim(fgets(STDIN))){
	// カンマで分割
	$key_value = explode(",", $input);
	$key = $key_value[0];
	$value = $key_value[1];
	// 連想配列として$itemに代入
	$item[$key] = $value;
}
// ここから下に記述
// 2000円以下の商品を価格が高い方から順に並べ替えて
// print_rで出力するプログラムを書いてみましょう。
foreach ($item as $key=>$value){
    if($value>2000){
        unset($item[$key]);
    }
}
arsort($item);
print_r($item);
?>
