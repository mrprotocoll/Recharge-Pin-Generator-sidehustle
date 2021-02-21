<?php
$pins = [];
$x = 1;
while($x < 251){
    $randOne = strval(rand(222222,9999999));
    $randTwo = strval(rand(100000,99999999));
    $pin = $randOne.$randTwo;
    //remove duplicates
    if(!in_array($pin,$pins)){
        $pins[] = $pin;
        echo $x.") &nbsp;&nbsp;&nbsp;".$pin."<br>";
        $x++;
    }
}

?>
