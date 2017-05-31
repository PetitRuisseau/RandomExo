<?php include("header.html"); ?>
<main>
    <?php
        if (isset($_POST["titre"]) && isset($_POST["article"])) {
            if (!is_dir("articles")) {
                mkdir("articles");
            }
            $newFile = fopen("articles/".$_POST["titre"].".txt", "w") or die ("Unable to open file!");
            fwrite($newFile, $_POST["article"]);
            fclose($newFile);
    ?>
    <h6>Votre article a été enregistré avec succès, vous allez etre redirigé vers le blog dans 5 secondes.<h6>
    <script LANGUAGE="JavaScript">
        setTimeout(function() {
            document.location.href="blog.php"
        }, 5000)
    </script>
    <?php
        } else {
            echo "<h6>Il y a eu un probleme, tout est perdu. désolé.</h6>";
        }
    ?>
</main>
<?php include("footer.html"); ?>