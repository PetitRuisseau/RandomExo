<?php include("header.html"); ?>
<main>
    <?php
        $articles = opendir('articles/'); 
        while($titre = readdir($articles)) {
	        if($titre[0] != '.' && !is_dir("articles/".$titre)) {
		        $file = fopen ("articles/".$titre, "r");
                $contenu = fgets ($file, 25500);
                fclose ($file);
                echo "<article><h1>".pathinfo($titre, PATHINFO_FILENAME)."</h1>";
                echo "<p>".$contenu."</p></article>";
	        }
    
        }
    ?>
</main>
<?php include("footer.html"); ?>