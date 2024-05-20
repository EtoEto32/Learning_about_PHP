<?php
$place = 1; // 何位かを$placeに数字で代入
echo "placeの中身:".$place." \n";
if($place==1){
    // 1位だったときの処理
    echo "優勝";
}else{
    // それ以外だったときの処理
    echo $place."位";
}
?>
