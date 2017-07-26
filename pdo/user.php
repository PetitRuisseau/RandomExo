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
        $truc = $bdd->prepare('SELECT pseudo, password, email FROM user WHERE id = :id;');
        $truc->bindValue('id', $_GET['id']);
        $truc->bindColumn('pseudo', $pseudo);
        $truc->bindColumn('password', $password);
        $truc->bindColumn('email', $email);        
        $truc->execute();
        $truc->fetch();
        echo "<h1>".$pseudo."</h3>";
        echo "<ul>";
        echo "<li>".$password."</li>";
        echo "<li>".$email."</li>";
        echo "</ul>";

        $truc = $bdd->prepare('SELECT `group`.name, `group`.id FROM user LEFT JOIN group_user ON group_user.id_user = user.id LEFT JOIN `group` ON group_user.id_group = `group`.id WHERE user.id = :id;');
        $truc->bindValue('id', $_GET['id']);
        $truc->bindColumn('name', $name);
        $truc->bindColumn('id', $id);    
        $truc->execute();
        echo "<h3>Group</h3>";
        echo "<ul>";
        while($ligne = $truc->fetch()) {
            echo "<li><a href='group.php?id=".$id."'>".$name."</a></li>";
        }
        echo "</ul>";

        $truc = $bdd->prepare('SELECT article.title, article.message FROM user LEFT JOIN article ON article.user_id = user.id WHERE user.id = :id;');
        $truc->bindValue('id', $_GET['id']);
        $truc->bindColumn('title', $title);
        $truc->bindColumn('message', $message);    
        $truc->execute();
        echo "<h3>Article</h3>";
        echo "<ul>";
        while($ligne = $truc->fetch()) {
            echo "<li>";
            echo "<h4>".$title."</h4>";
            echo "<p>".$message."</p>";
            echo "</li>";
        }
        echo "</ul>";

    } catch (PDOException $exception) {
        echo $exception->getMessage();
    }
    ?>
</body>
</html>