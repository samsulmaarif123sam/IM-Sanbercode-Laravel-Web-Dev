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

class Ape extends Animal
{
    public function yell()
    {
        echo "Yell : Auooo" . PHP_EOL;
    }

    // Override get_legs() method to set legs = 2
    public function get_legs()
    {
        return 2;
    }
}

?>







    </body>
</html>