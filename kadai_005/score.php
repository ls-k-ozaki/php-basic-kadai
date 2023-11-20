<!doctype html>
<meta charset="utf-8">
<?php 
$score1 = "80";
$score2 = "60";
$score3 = "55";
$score4 = "40";
$score5 = "100";
$score6 = "25";
$score7 = "80";
$score8 = "95";
$score9 = "30";
$score10 = "60";

$average = ($score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10) / 10;
$total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

echo "平均点は".$average."点です。<br>";
echo "合計点は".$total."点です。<br><br>";

$sum = 0;
$array = compact("score1","score2","score3","score4","score5","score6","score7","score8","score9","score10");

foreach ($array as $value) {
  $sum += $value;
}; 

$sum_average = $sum / 10 ;

//echo $sum;

echo "以下配列ver<br>";
echo "平均点は".$sum_average."点です。<br>";
echo "合計点は".$sum."点です。";
//print_r($loop);

?>