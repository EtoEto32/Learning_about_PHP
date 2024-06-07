<?php
// RPGの攻撃シーン
class Player {
    public $myName;

    public function __construct($name) {
        $this->myName = $name;
    }

    public function attack($enemy) {
        echo $this->myName."は".$enemy."を攻撃した\n";
    }
}

class Warrior extends Player {
    // ここにメソッドのオーバーライドを実装する
    public function attack($enemy){
        echo $this->myName."は".$enemy."を猛攻撃した";
    }


}
$hero = new Player("勇者");
$wizard = new Player("魔法使い");
$warrior = new Warrior("戦士");
$players = [$hero, $wizard, $warrior];

foreach ($players as $player) {
    $player->attack("スライム");
}
?>
