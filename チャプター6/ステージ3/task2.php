<?php

$basket = [
  ["木の棒", "こん棒", "エクスカリバー"],
  ["おにぎり", "おにぎり", "むぎ茶"],
  ["毒消し", "薬草", "アイアンシールド"]
];

# ここに、basket[2]のインデックス2を削除するコードを記述する
unset($basket[2][2]);
print_r($basket);

?>
