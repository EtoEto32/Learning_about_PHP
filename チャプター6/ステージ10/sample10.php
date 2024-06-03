<?php
// 標準入力から2次元配列
$number=trim(fgets(STDIN));
echo $number;
for($i=0;$i<$number;$i++){//行数分繰り返す
    $table[]=explode(" ",trim(fgets(STDIN)));//ここで既に2次元配列格納
}
print_r($table);
foreach ($table as $line){
    foreach ($line as $dot){
        if($dot==1){
            echo "#";
        }else{
            echo " ";   
        }
    }
    echo "\n";
}
?>
