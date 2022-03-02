<?php
$n = readline("Insert the size of the array ");
$VEC1 = [];
$VEC2 = [];
echo "------------ Array 1 --------------"."\n";
for ($i =0; $i<$n; $i++){
    $VEC1[] = readline("Please insert a number ");
}
echo "------------ Array 2 --------------"."\n";
for ($i =0; $i<$n; $i++){
    $VEC2[] = readline("Please insert a number ");
}
for ($i =0; $i<$n; $i++){
    for ($j=0;$j<$n;$j++){
        if($VEC1[$i]==$VEC2[$j]){
            echo $VEC2[$j]." ";
        }
    }
}
