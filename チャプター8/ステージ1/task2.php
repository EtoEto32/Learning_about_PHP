<?php
// クラスにメソッドを定義しよう
class Greeting {
    // この下に、sayHelloメソッドを記述する
    public function sayHello(){
        echo "hello PHP";
    }
}

$paiza = new Greeting();
$paiza->sayHello();
?>
