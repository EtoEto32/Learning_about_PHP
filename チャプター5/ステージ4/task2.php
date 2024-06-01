<?php
$input = trim(fgets(STDIN));
$array = explode(",", $input);

// ここから下に記述　
// $array の value に代入されている
// 全ての数値の合計を出力してみましょう。
foreach ($array as $number){
    $total+=$number;
}
echo $total."\n";
?>
