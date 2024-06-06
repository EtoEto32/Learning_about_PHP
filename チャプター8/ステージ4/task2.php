<?php
// 学生メソッドを作る
class Gakusei {
    private $myKokugo;
    private $mySansu;

    public function __construct($kokugo, $sansu) {
        $this->myKokugo = $kokugo;
        $this->mySansu = $sansu;
    }

    // この下に、合計得点を戻り値として返すsumメソッドを記述する
    public function sum(){
        return $this->myKokugo+$this->mySansu;
    }

}

$yamada = new Gakusei(70, 43);
echo "合計は" . $yamada->sum() . "点です\n";
?>
