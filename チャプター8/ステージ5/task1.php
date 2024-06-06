<?php
// 間違い探し
class Greeting {
    private $myName;
    public function __construct($name) {
        $this->myName = $name;
    }

    private function sayHello() {
        echo "hello " . $this->myName;
    }
    public function output(){
        echo $this->sayHello();//この$thisは現在のインスタンス上のという意味を合わせている。
    }
}

$paiza = new Greeting("paiza");
$paiza->output();
?>
