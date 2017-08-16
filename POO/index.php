<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include_once("personnage.php");
    include_once("dps.php");
    include_once("mj.php");
    $genti = new DPS(); 
    $mechant = new DPS();
    $mj = new MJ("attaqueSpecial");
    
    echo "Genti :";
    echo $genti->genererHTML();
    echo "mechant :";
    echo $mechant->genererHTML();

    $mj->action($genti, $mechant);

    echo "genti :";
    echo $genti->genererHTML();
    echo "mechant :";
    echo $mechant->genererHTML();
    
    ?>
</body>
</html>