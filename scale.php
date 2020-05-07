<?php
$arrayweights = array();
var_dump($argv);
$pushToArray = array_map('intval', explode(',', $argv[3]));
array_push($arrayweights, $pushToArray);
var_dump($arrayweights[0]);
if ($argv[1] === $argv[2]) {
    echo "in balans";
} else {
    foreach ($arrayweights[0] as $number1) {
        $newbalansleft = $number1 + $argv[1];
        if ($newbalansleft == $argv[2]) {
            echo " eerste getal + " . $number1 . " ";
        } else {
            foreach ($arrayweights[0] as $number2) {
                $newbalansleftNumbertwo = $number2 + $newbalansleft;
                if ($newbalansleftNumbertwo == $argv[2]) {
                    echo " getal  $number1 +  $number2 ";
                }
            }
        }
    }
    foreach ($arrayweights[0] as $number1) {
        $newbalansright = $number1 + $argv[2];
        if ($newbalansright == $argv[1]) {
            echo " tweede getal  + " . $number1 . " ";
        } else {
            foreach ($arrayweights[0] as $number2) {
                $newbalansrightNumbertwo = $number2 + $newbalansright;
                if ($newbalansrightNumbertwo == $argv[1]) {
                    echo " tweede getal  $number1 +  $number2 ";
                }
            }
        }
    }
}
?>