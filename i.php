<?php

$n = readline("Insert the size of the array ");

$array =[];

for ($i =0; $i<$n; $i++){
    $array[] = readline("Please insert a number ");
}

sort($array);

for ($i =0; $i<$n; $i++){
    echo $array[$i]." ";
}
