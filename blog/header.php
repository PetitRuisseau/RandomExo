<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Candal|Indie+Flower|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Document</title>
</head>

<body>
    <header>
        <div>
            <img src="img/logo.png" />
            <h1>Un blog de fou !</h1>
        </div>
        <nav>
            <a href="create.php"
            <?php 
                if (isset($page) && $page == "create") {
                    echo " class='underline' ";
                }
            ?>
            >Créer un article</a>
            <a href="blog.php"
            <?php 
                if (isset($page) && $page == "blog") {
                    echo " class='underline' ";
                }
            ?>
            >Le blog</a>
            <form action="control.php" method="post">
                <input type="text" name="pseudo"
        </nav>
    </header>