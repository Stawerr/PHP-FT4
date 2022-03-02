<?php
$n = readline("Insert the size of the array");
// $array = array($number);
$array = [];
$posBigger =0;
$posSmaller =0;

for ($i =0; $i<$n; $i++){
    $array[] = readline("Please insert a number ");
}
$biggest=$array[0];
$smaller=$array[0];

for ($i =0; $i<$n; $i++){
    if ($array[$i] > $biggest){
        $biggest = $array[$i];
        $posBigger = $i;
    }
    else if ($array[$i] < $smaller){
        $smaller = $array[$i];
        $posSmaller = $i;
    }
}
echo  "The biggest number is ".$biggest." in the position".$posBigger."\n";
echo "The smaller number is ".$smaller." in the position ".$posSmaller;