<?php
$n = readline("Please insert the size of the array? ");
//$array= array($n);
$array = [];

for ($i=0;$i<$n;$i++){
    $array[]=readline("Please insert a value in a array ");

}
for ($i=$n;$i>=0;$i--){
    echo $array[$i]." ";
}