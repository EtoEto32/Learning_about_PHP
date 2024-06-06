<?php
// RPGの敵クラスを作る
class Enemy{
    public $myName;
    public function __construct($name){
        $this->myName =$name;
    }
    public function attack(){
        echo $this->myName."は勇者を攻撃した。\n";
    }
}
$enemies[]=new Enemy("スライム");
$enemies[]=new Enemy("モンスター");
$enemies[]=new Enemy("ドラゴン");
foreach ($enemies as $enemy){//インスタンスを複数の配列にいれてそれを順番に呼び出している。
    $enemy->attack();
}
?>

<?php
// RPGの敵クラスを作る
class Enemy{
    // インスタンス変数
    public $myName;

    // コンストラクタ
    public function __construct($name){
        // コンストラクタ引数の値をインスタンス変数に設定
        $this->myName = $name;
    }

    // 攻撃メソッド
    public function attack(){
        // インスタンス変数を使ってメッセージを表示
        echo $this->myName . "は勇者を攻撃した。\n";
    }
}

// 'モンスター'という名前の敵インスタンスを作成
$enemy = new Enemy("モンスター");

// 攻撃メソッドを呼び出す
$enemy->attack();
?>

