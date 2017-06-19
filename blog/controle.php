<?php include("header.php"); ?>
<main>
    <?php
    if (isset($_POST['creer']) && !isset($_POST['truc'])) {
        if (isset($_POST["titre"]) && isset($_POST["article"])) {
            if (!is_dir("articles")) {
                mkdir("articles");
            }
            $newFile = fopen("articles/".$_POST["titre"].".txt", "w") or die ("Unable to open file!");
            fwrite($newFile, $_POST["article"]);
            fclose($newFile);
            echo '<h6>Votre article a été enregistré avec succès, vous allez etre redirigé vers le blog dans 3 secondes.<h6>';
        } else {
            echo "<h6>Il y a eu un probleme, tout est perdu. désolé.</h6>";
        }
    }

    if (isset($_POST['creer']) && isset($_POST['truc'])) {
        if (isset($_POST["titre"]) && isset($_POST["article"])) {
            unlink("articles/".$_POST["truc"]);
            $newFile = fopen("articles/".$_POST["titre"].".txt", "w") or die ("Unable to open file!");
            fwrite($newFile, $_POST["article"]);
            fclose($newFile);
            echo '<h6>Votre article a été enregistré avec succès, vous allez etre redirigé vers le blog dans 3 secondes.<h6>';
        } else {
            echo "<h6>Il y a eu un probleme, tout est perdu. désolé.</h6>";
        }
    }

    if (isset($_POST['supprimer'])) {
        unlink("articles/".$_POST["truc"]);
        echo "<h6>L'article a bien été supprimer, vous allez etre redirigé vers le blog dans 5 secondes.</h6>";
    }
    ?>
    <script LANGUAGE="JavaScript">
        setTimeout(function() {
            document.location.href="blog.php"
        }, 3000)
    </script>
</main>
<?php include("footer.html"); ?>