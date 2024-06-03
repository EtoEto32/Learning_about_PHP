<?php
// 2次元配列で画像を表示する

// 画像用配列
$players_img = array(
    "https://paiza-webapp.s3.amazonaws.com/files/learning/rpg/Empty.png",
    "https://paiza-webapp.s3.amazonaws.com/files/learning/rpg/Dragon.png",
    "https://paiza-webapp.s3.amazonaws.com/files/learning/rpg/Crystal.png",
    "https://paiza-webapp.s3.amazonaws.com/files/learning/rpg/Hero.png",
    "https://paiza-webapp.s3.amazonaws.com/files/learning/rpg/Heroine.png",
);

// 配置データを読み込み
for ($i = 0; $i < 3; $i++) {
    $team[] = explode(",", trim(fgets(STDIN)));

}

// 配置データに合わせて表示する
echo "<table>";
foreach ($team as $row) {
    echo "<tr>";
    foreach ($row as $column) {
        echo "<td><img src='".$players_img[$column]."'></td>";
    }
    echo "</tr>\n";
}
echo "</table>\n";


?>
