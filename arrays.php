<?php

$variavel = array(1,2,3,4,5);

print_r($variavel);
echo "<br>";

foreach($variavel as $i){
    echo $i;
}

echo "<br>$variavel[0]";



$variavel2 = array("a"=>"a", "b"=>"b", "c"=>"c");

echo "<br>";

print_r($variavel2);

echo "<br>";

foreach($variavel2 as $i){
    echo $i;
}

echo "<br>";
echo $variavel2["a"];

$variavel3 = array("")

?>