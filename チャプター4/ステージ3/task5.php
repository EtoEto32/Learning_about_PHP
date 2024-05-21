<?php
// 今回は自力で全部書いてみよう！
$input=trim(fgets(STDIN));
$array=explode(",",$input);
$count=count($array);
for($i=0;$i<$count;$i++){
    print_r($array[$i]."さん\n");
}
?>
