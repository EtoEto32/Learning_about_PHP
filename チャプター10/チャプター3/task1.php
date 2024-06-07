<?php
echo "start\n";
try{
    $date=new DateTime("199x-01-01");
    echo $date->format("Y/m/d")."\n";
}catch(Exception $e){
    echo "指定された日付が不正です\n";
    //echo "発生した例外:",$e,"\n";
    fputs(STDERR,$e->getMessage()."\n");
    //実行時エラータグのみにエラーメッセージを出力する。
    //一般ユーザーとの棲み分けが出来る
}finally{
    echo "end\n";
}
?>
