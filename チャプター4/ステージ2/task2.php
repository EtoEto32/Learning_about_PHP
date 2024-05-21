<?php
// 標準入力から3行分の入力を配列に代入する
for($i=0; $i < 3; $i++){
    $team[] = trim(fgets(STDIN));
}
// ここから下に記述　
// $team に「狩人」という要素追加
$team[]="狩人";
print_r($team);
?>
