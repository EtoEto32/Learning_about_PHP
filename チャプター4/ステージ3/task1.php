<?php
// 標準入力から1行取得し$inputに代入
$input = trim(fgets(STDIN));
// $inputの文字列を分割してみよう！
$array=explode("/",$input);
print_r($array);
?>
