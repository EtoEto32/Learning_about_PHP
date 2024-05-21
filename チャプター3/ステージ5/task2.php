<?php
$input1=trim(fgets(STDIN));
$input2=trim(fgets(STDIN));

for($year=$input1;$year<$input1+$input2;$year++){
    $syouwa=$year-1925;
    echo "西暦".$year."年は、昭和".$syouwa."年です。\n";
}
?>

