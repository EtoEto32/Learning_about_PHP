<?php
// 2次元配列の要素を更新する
$basket = [
  ["木の棒", "こん棒"],
  ["おにぎり", "おにぎり"],
  ["毒消し", "薬草"]
];

// ここに、要素を更新するコードを記述する
$basket[0][1]="石斧";
echo($basket[0][0])."\n";
echo($basket[0][1])."\n";
echo($basket[1][0])."\n";
echo($basket[1][1])."\n";
echo($basket[2][0])."\n";
echo($basket[2][1])."\n";
?>
