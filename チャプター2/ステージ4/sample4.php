<?php
// おみくじを作る
// 比較演算子 == > < >= <= !=
// 大吉　中吉　小吉　凶　大凶
$omikuji=rand(1,10);
if($omikuji==1){
    echo "大吉";
}elseif($omikuji==2){
    echo "中吉";
}elseif($omikuji<=4){//3,4
    echo "小吉";
}elseif($omikuji<=7){//5,6,7
    echo "凶";
}else{
    echo "大凶";//8,9,10
}
?>
