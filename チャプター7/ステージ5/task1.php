<?php
// 引数のデフォルト値

function say_hello($target = "paiza"){
    echo "hello ".$target;
}

// この下に関数呼び出しを記述する
echo say_hello();

?>
