<?php
// 2次元配列を作成する
$player="忍者";
$teamA=[$player,"勇者","戦士","魔法使い"];
echo $teamA[0].",";
echo $teamA[1].",";
echo $teamA[2].",";
echo $teamA[3]."\n";

$teamB=[$player,"勇者","戦士","魔法使い"];
echo $teamB[0].",";
echo $teamB[1].",";
echo $teamB[2].",";
echo $teamB[3]."\n";
$teamC=["勇者","戦士","魔法使い"];
$teamD=["盗賊","忍者","商人"];
$teamE=["スライム","ドラゴン","魔王"];
$teams=[$teamC,$teamD,$teamE];
print_r($teams);
echo $teams[0][0].",";
echo $teams[1][0].",";
echo $teams[2][0]."\n";
?>
