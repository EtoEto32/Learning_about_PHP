<select name="year">
<?php
$start=trim(fgets(STDIN));
$end=trim(fgets(STDIN));
while($start<=$end){
    $year=$start;
    echo "<option>".$year."年生まれ</option>\n";
    $start++;
}
?>
</select>
