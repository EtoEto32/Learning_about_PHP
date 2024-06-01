<?php
$input = trim(fgets(STDIN));
$array = explode(",", $input);

// ここから下に記述　
// 配列のvalueに「勇者」が何回出現するか数えて
// 出現数を数字で出力してください。
$count=0;
foreach ($array as $value){
    if($value=="勇者"){
        $count+=1;
    }
}
echo $count;
?>
