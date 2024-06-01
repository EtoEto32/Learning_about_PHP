<?php
// 2次元配列の基本操作
$teams =
    [
        ["勇者", "戦士"],
        ["盗賊", "忍者", "商人"],
        ["スライム", "ドラゴン", "魔王"],
        ["魔法使い"]
    ];
$teams[0][0]="魔導士";
print_r($teams);
echo $teams[0][0]."\n";
echo $teams[0][1]."\n";
echo $teams[0][2]."\n";
echo count($teams)."\n";
echo count($teams[0])."\n";
?>