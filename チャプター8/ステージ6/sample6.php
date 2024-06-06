<?php
// staticを理解しよう
class Item {
    public static $tax=1.08;
    //public $price;
    //public $quantity;

    //public function __construct($newPrice, $newQuantity){
    //    $this->price = $newPrice;
    //    $this->quantity = $newQuantity;
    //}

    public static function getTotalAmount($price,$quantity) {
        return round($price * $quantity*self::$tax);
    }
}

$total=Item::getTotalAmount(120,15);
echo "合計金額は" . $total . "円です。\n";
//staticを使えば、わざわざ実体化する必要がなくてもメソッドを関数のように呼び出せる
//という事である。
?>
