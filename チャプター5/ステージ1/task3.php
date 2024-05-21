<?php
// 標準入力を３行取得
for($i=0 ; $i<3 ; $i++){
	$input = trim(fgets(STDIN));
	// 入力値を/で分割
	$key_value =explode("/", $input);
	// 手前の要素をkeyとして、後の要素をvalueとして連想配列に代入
	$key = $key_value[0];
	$value = $key_value[1];
	$team[$key] = $value;

}
// ここから下に記述　
// 配列 $team にkeyが「狩人」、valueが「鳥獣をとる猟師」という要素を追加
$team["狩人"]="鳥獣をとる猟師";
print_r($team);
?>
