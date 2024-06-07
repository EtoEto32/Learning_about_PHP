<?php
// クラスを継承する
class Box {
    public $myItem;
    
    // コンストラクタの定義(この書き方)
    public function __construct() {
        $this->myItem = "新しいアイテム";
    }
    
    // openメソッドの定義
    public function open() {
        echo "宝箱を開いた。".$this->myItem."を手に入れた。\n";
    }
}
class JewelryBox extends Box{
        public function look(){
            echo "宝箱はキラキラと輝いている。\n";
        }
}

// Boxクラスのインスタンスを作成してopenメソッドを呼び出す
$box = new Box();
$box->open();
echo "\n";
$jewlryBox=new JewelryBox();
$jewlryBox->look();
$jewlryBox->open
?>
