<?php
// 模様を出力してみよう
$landMap = array_fill(0, 5, array_fill(0, 10, "."));


// ここに「＋」を代入するコードを記述
$landMap[0][0]="+";
$landMap[0][9]="+";
$landMap[4][0]="+";
$landMap[4][9]="+";
foreach ($landMap as $row) {
  foreach ($row as $value) {
    echo $value;
  }
  echo "\n";
}
?>
