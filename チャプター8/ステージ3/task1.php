<?php
// RPGの攻撃シーン
class Player {
    public $myName;

    public function __construct($name) {
        $this->myName = $name;
    }

    public function attack($enemy) {
        echo $this->myName . "は" . $enemy . "を攻撃した\n";
    }
}

$team[] = new Player("勇者");
$team[] = new Player("戦士");
$team[] = new Player("魔法使い");

// 攻撃対象を定義
$enemy = "スライム";

foreach ($team as $member) {
    $member->attack($enemy);
}
?>
