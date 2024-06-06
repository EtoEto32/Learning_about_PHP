<?php
// アクセス修飾子を理解しよう(public,private)
class Player{
    public $myName;//インスタンス変数
    public function __construct($name){
        $this->myName=$name;
    }
    private function walk(){
        echo $this->myName."は荒野を歩いていた。\n";
    }
    public function output(){
        $this->walk();
    }
}
$player=new Player("勇者");
$player->output();
?>
