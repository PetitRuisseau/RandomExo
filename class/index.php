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
    $perso1 = new Personnage(10,10,10,10,10,10,10); 
    $perso2 = new DPS(0,0,0,0,0,0,0,0,0);
    
      
    echo $perso1->genererHTML();
    echo $perso2->genererHTML();
    $perso2->attaqueSpecial($perso1);
    echo $perso1->genererHTML();
    echo $perso2->genererHTML();
    ?>
</body>
</html>