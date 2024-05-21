<?php
// 配列を使ったランダムくじ引き
$member=array();
$input=trim(fgets(STDIN));
$member=explode(",",$input);
print_r($member);
$max=count($member)-1;
$key=rand(0,$max);
echo $key."\n";
echo $member[$key];
?>
