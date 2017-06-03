<?php 
$page = "blog";
include("header.php"); 
?>
<main>
    <?php
        $articles = opendir('articles/'); 
        while($titre = readdir($articles)) {
	        if($titre[0] != '.' && !is_dir("articles/".$titre)) {
		        $file = fopen ("articles/".$titre, "r");
                $contenu = fgets ($file, 25500);
                fclose ($file);
	?>
                <article>
                    <h1><?php echo pathinfo($titre, PATHINFO_FILENAME); ?></h1>
                    <p><?php echo $contenu; ?></p>
                    <form action="controle.php" method="POST">
                        <input type="hidden" value="<?php echo $titre; ?>" name="truc"/>
                        <input type="submit" name="supprimer" value="supprimer"/>
                    </form>
                    <form action="create.php" method="POST">
                        <input type="hidden" value="<?php echo $titre; ?>" name="truc"/>
                        <input type="submit" name="modifier" value="modifier"/>
                    </form>
                </article>
    <?php
            }
    
        }
    ?>
</main>
<?php include("footer.html"); ?>