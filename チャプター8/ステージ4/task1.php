<?php
// 学生メソッドを呼び出す
class Gakusei {
    public $myKokugo;
    public $mySansu;

    public function __construct($kokugo, $sansu) {
        $this->myKokugo = $kokugo;
        $this->mySansu = $sansu;
    }

    public function sum() {
        return $this->myKokugo + $this->mySansu;
    }
}


// この下に、クラスをインスタンス化し、メソッド呼び出しを記述する
$score =new Gakusei(70,43);
echo "合計は" .$score->sum(). "点です\n";
?>
