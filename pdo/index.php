<?php
spl_autoload_register();
use truc\User;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index.php">
        <ul>
            <li>
                <label for="pseudo">Pseudo :</label>
                <input type="text" name="pseudo" placeholder="pseudo" id="pseudo" />
            </li>
            <li>
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" />
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="email" name="email" placeholder="Exemple@truc.com" id="email" />
            </li>
            <li>
                <input type="submit" name="ok" value="ok" />
            </li>
        </ul>
    </form>
    <form method="post" action="index.php">
        <ul>
            <li>
                <label for="recherche">recherche :</label>
                <input type="text" name="recherche" placeholder="recherche" id="recherche" />
            </li>
            <li>
                <input type="submit" name="chercher" value="chercher" />
            </li>
        </ul>
    </form>
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=social_network', 'root', '');
    if(isset($_POST['ok'])) {
        $machin = $bdd->prepare('INSERT INTO user(pseudo, password, email) VALUE (:pseudo, :password, :email);');
        $machin->bindParam('pseudo', $_POST['pseudo']);
        $machin->bindParam('password', $_POST['password'], PDO::PARAM_STR);
        $machin->bindParam('email', $_POST['email'], PDO::PARAM_STR);
        $machin->execute();
    }
    // $id = 3;
    // $truc = $bdd->query('SELECT * FROM user WHERE id = '.$id.';');
    // while($ligne = $truc->fetch()) {
    //     $user = new User($ligne['pseudo'], $ligne['password'], $ligne['email'], $ligne['id']);
    //     var_dump($user);
    // }
    if (isset($_POST['chercher'])) {
        $truc = $bdd->prepare('SELECT pseudo, id FROM user WHERE pseudo = :recherche1 OR pseudo LIKE :recherche2 OR pseudo LIKE :recherche3 OR pseudo LIKE :recherche4;');
        $recherche1 = $_POST['recherche'];
        $truc->bindValue('recherche1', $recherche1);
        $recherche2 = "%".$_POST['recherche']."%";
        $truc->bindValue('recherche2', $recherche2);
        $recherche3 = "%".$_POST['recherche'];
        $truc->bindValue('recherche3', $recherche3);
        $recherche4 = $_POST['recherche']."%";
        $truc->bindValue('recherche4', $recherche4);
        $truc->bindColumn('pseudo', $pseudo);
        $truc->bindColumn('id', $id);
        $truc->execute();
        echo "<ul>";
        while($ligne = $truc->fetch()) {
            echo "<li><a href='user.php?id=".$id."'>".$pseudo."</a></li>";
        }
        echo "</ul>";
    }
    
} catch (PDOException $exception) {
    echo $exception->getMessage();
}

?>




</body>
</html>