<?php
// ループで2次元配列を出力してみよう

$teams = [
  ["勇者", "忍者"],
  ["武士", "戦士"],
  ["僧侶", "魔法使い"],
];

foreach ($teams as $team) {
  foreach ($team as $member) {
    // この下に$memberの値を出力するコードを記述
    echo $member;
    echo "\n";
  }
}

?>
