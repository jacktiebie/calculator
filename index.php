<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator made with PHP</title>
</head>
<body>
    <form>
    <input type="number" name="input1" >
    <input type="number" name="input2" >

    <select name="select">
    <option value="subtraction">subtraction</option>
    <option value="multiplication">multiplication</option>
    <option value="division">division</option>
    <option value="modulus">modulus</option>
    </select>
    <button type="submit" name="submit" value="submit">Submit</button>
    </form>


    <?php

if (!empty($_GET["submit"])) {
    $number1 = $_GET["input1"];
    $number2 = $_GET["input2"];
    $method = $_GET["select"];
    
    switch ($method) {
        case "subtraction":
        echo $number1 - $number2;
        
        break;
        case "multiplication":
         echo intval($number1) * intval($number2);
      
        break;   
        case "division":
        echo $number1 / $number2;
        break;
        case "modulus":
        echo $number1 % $number2;
        break;
    }
    } 
    ?>
</body>
</html>