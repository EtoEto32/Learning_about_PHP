<?php
// 九九の表を作成してみよう
function multiply($x, $y){
    return $x * $y;
}

for ($num1 = 1; $num1 <=9; $num1++) {
    for ($num2 = 1; $num2 <=9; $num2++) {
        if($num2==9){
            echo multiply($num1,$num2)."\n";
        }else{
           echo multiply($num1,$num2)." "; 
        }
    }
}
echo "\n";

?>
