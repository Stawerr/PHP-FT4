<?php
$n = readline("Insert the size of the array ");
$array = [];
$biggestDiff=0;

for ($i =0; $i<$n; $i++){
    $array[] = readline("Please insert a number ");
}
for ($i =0; $i<$n-1; $i++){
    if(abs($array[$i]-$array[$i+1])>$biggestDiff){
        $biggestDiff=abs($array[$i]-$array[$i+1]);
    }
}
echo "The biggest gap is ". $biggestDiff;