<?php
$n = readline("Insert the size of the array ");
$array = [];
$cont=0;
for ($i =0; $i<$n; $i++){
    $array[] = readline("Please insert a number ");
}
for ($i =0; $i<$n; $i++){
    if($array[$i]%3==0){
    $cont++;
    }
}
echo "There are ".$cont. " multiples of 3" ;