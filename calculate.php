<?php

if (!empty($_GET["submit"])) {
$number1 = $_GET["input1"];
$number2 = $GET["input2"];
$method = $GET["select"];

switch ($method) {
    case "subtraction":
    $result = $number1 - $number2;
    echo $result;
    break;
    case "multiplication":
     $result = $number1 * $number2;
     echo $result;
    break;   
    case "division":
    $result = $number1 / $number2;
    echo $result;
    break;
    case "modulus":
    $result = $number1 % $number2;
    echo $result;
    break;
}
} 

