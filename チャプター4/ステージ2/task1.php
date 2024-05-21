<?php
// 標準入力から５行分の入力を配列に代入する
for($i=0; $i < 5; $i++){
    $team[] = trim(fgets(STDIN));
}
// ここから下に記述　
// $team の3つ目の要素を出力してください
echo $team[2];

?>
