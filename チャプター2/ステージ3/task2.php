<?php
$place = rand(1,12); // 何位かを$placeに1~12からランダムに選んで代入
echo "placeの中身:".$place."\n";
if($place<=6){
    // 条件が成り立ったときの処理
    echo $place."位入賞";
}else{
    // それ以外だったときの処理
    echo $place."位入賞圏外";
}

?>
