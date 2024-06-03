<?php
// RPGの攻撃シーン

function attack($person){
    echo $person."はスライムを攻撃した\n";
}

function output_ememy_hp($enemy_hp){
    echo "敵のHPは残り".$enemy_hp."です\n";
}

$enemy_hp = trim(fgets(STDIN));
$team = array("勇者" => 200, "戦士" => 150, "魔法使い" => 100);
foreach ($team as $person => $power) {
    attack($person);
    $enemy_hp -= $power;
    output_ememy_hp($enemy_hp);
}

?>
