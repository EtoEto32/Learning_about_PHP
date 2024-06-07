<?php
// クラスメソッドを呼び出そう
class Greeting{
    public static function say_hello(){
        echo "hello paiza";
    }
}
// この下で、クラスメソッドを呼び出す
echo Greeting::say_hello();


?>
