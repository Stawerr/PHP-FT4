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
    $cont=0;
    for ($k=0;$k<$i;$k++){
        if($VEC1[$i]==$VEC1[$k]){
           $cont++;
           $k=$i; // break
        }
    }
    if($cont==0){
        for($j=0;$j<$n;$j++){
            if($VEC1[$i]==$VEC2[$j]){
                echo $VEC1[$i]. " ";
                $j=$n; // break
            }
        }
    }
}