<?php
// クラスにメソッドを定義しよう
class Greeting {
    public $msg;
    public $target;

    public function __construct() {
        $this->msg = "hello";
        $this->target = "paiza";
    }
    public function sayHello() {
        echo $this->msg." ".$this->target;
    }
}

class Hello extends Greeting {
}

$hello = new Hello();
// 続けて、sayHelloメソッドを呼び出す
$hello->sayHello();
?>
