<?php
$n = readline("Insert the size of the array ");
$array = [];
$cont=0;
for ($i =0; $i<$n; $i++){
    $array[] = readline("Please insert a number ");
}
for ($i =1; $i<$n-1; $i++){
    if($array[$i]>$array[$i-1] && $array[$i]>$array[$i+1]){
        $cont++;
    }
}
echo $cont;