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

class Frog extends Animal
{
    public function jump()
    {
        echo "Jump : Hop Hop" . PHP_EOL;
    }
}

?>








    </body>
</html>