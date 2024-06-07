<?php
// メソッドをオーバーライドしよう
class Greeting {
    public function sayHello() {
        echo "greeting paiza";
    }
}

class Hello extends Greeting {
    // この下で、メソッドをオーバーライドする
    public function sayHello(){
        echo "hello paiza";
    }
}

$player = new Hello();
$player->sayHello();
?>
