<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Document</title>
</head>

<body>

    <?php

require_once('animal.php');
require_once('ape.php');
require_once('frog.php');

// Release 0: Instantiate Animal class
$sheep = new Animal("shaun");

echo "Name: " . $sheep->get_name() . PHP_EOL; 
echo "<br>";           // "shaun"
echo "Legs: " . $sheep->get_legs() . PHP_EOL; 
echo "<br>";           // 4
echo "Cold blooded: " . $sheep->get_cold_blooded() . PHP_EOL;   // "no"
echo PHP_EOL;
echo "<br>";
echo "<br>";
// Release 1: Instantiate Ape and Frog classes
$kodok = new Frog("buduk");
echo "Name : " . $kodok->name . PHP_EOL;   
echo "<br>";        // "buduk"
echo "Legs: " . $kodok->legs . PHP_EOL;    
echo "<br>";       // 4
echo "Cold blooded: " . $kodok->cold_blooded . PHP_EOL;
echo "<br>";  // "no"
$kodok->jump(); // "hop hop"
echo PHP_EOL;
echo "<br>";
echo "<br>";
$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->name . PHP_EOL;   
echo "<br>";        // "kera sakti"
echo "Legs: " . $sungokong->get_legs() . PHP_EOL;  
echo "<br>";    // 2
echo "Cold blooded: " . $sungokong->cold_blooded . PHP_EOL; 
echo "<br>"; // "no"
$sungokong->yell(); // "Auooo"
echo PHP_EOL;

?>







    </body>
</html>