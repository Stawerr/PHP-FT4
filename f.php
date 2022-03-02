<?php
$n = readline("Insert the size of the array ");
$array = [];
$cont=0;
$average=0;
$sum=0;

for ($i =0; $i<$n; $i++){
    $array[] = readline("Please insert a number ");
}
for ($i =0; $i<$n; $i++){
    if($array[$i]%2!=0){
        $sum=$sum+$array[$i];
        $cont=$cont+1;
    }
}
$average=$sum/$cont;
echo "The average is ". $average;