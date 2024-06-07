<?php
// 親クラスと子クラス
class Greeting {
    public $msg;
    public $target;


    public function __construct() {
        $this->target = "paiza";
        $this->msg = "hello";
    }

    public function sayHello() {
        echo $this->msg." ".$this->target."\n";
    }
}
class NewFriend extends Greeting {
    public function __construct() {
        // 下記に足りない処理を記述する
        parent::__construct("魔法使い");
        $this->target = "PHP";
    }
    public function sayHello() {
        echo $this->msg." ".$this->target."\n";
    }

}

$paiza = new Greeting();
$paiza->sayHello();
$paiza = new NewFriend();
$paiza->sayHello();
