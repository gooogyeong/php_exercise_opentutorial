<?php
$coworkers = array('egoing', 'leezche', 'duru', 'taeho');
echo $coworkers[1].'<br>'; // leezche
echo $coworkers[3].'<br>'; // taeho
array_push($coworkers,'minkyung');
echo $coworkers[4]; // minkyung
echo count($coworkers); // 5 returns the number of elements in an array
var_dump($coworkers);
//array(5) {
//   [0]=> string(6) "egoing" 
//   [1]=> string(7) "leezche" 
//   [2]=> string(4) "duru"
//   [3]=> string(5) "taeho" 
//   [4]=> string(8) "minkyung" 
// }
?>