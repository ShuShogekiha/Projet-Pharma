<!DOCTYPE html>
<html>
<head>
    <title>POO</title>
</head>
<body>
    
    <p>Siuuuuuu</p>

    <?php
        //require(__DIR__ ."/main.php");

        use bo\main;

        echo "ici ok";
        $e = new main();
        echo 'test';
        echo $e->callMaVariable();
        echo $e->__toString();
    
    ?>
</body>