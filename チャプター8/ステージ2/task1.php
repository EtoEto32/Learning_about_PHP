<?php
// インスタンスを実体化しよう
class Greeting {
    public $myName;

    public function __construct($name) {
        $this->myName = $name;
    }

    public function sayHello() {
        echo "hello " . $this->myName;
    }
}
// この下に、インスタンスを実体化し、メソッド呼び出しを記述する
$hero=new Greeting("paiza");
$hero -> sayHello();


