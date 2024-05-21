<?php
// 標準入力から4行分の入力を配列に代入する
for($i=0; $i < 4; $i++){
    $team[] = trim(fgets(STDIN));
}
// ここから下に記述　
// $team の2つ目の要素を「木こり」に上書き
$team[1]="木こり";
print_r($team);
?>
