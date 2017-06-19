<?php 
$page = "create";
include("header.php"); 

if (isset($_POST['modifier'])) {
    $file = fopen ("articles/".$_POST['truc'], "r");
    $contenu = fgets ($file, 25500);
    fclose ($file);
}
?>
<main>
    <form method="post" action="blog.php">
        <input type="text" name="titre" required 
        <?php
            if (isset($file)) {
                    echo "value='".pathinfo($_POST['truc'], PATHINFO_FILENAME)."'";
            }
        ?>
        />
        <?php
            if (isset($contenu)) {
                echo '<textarea name="article" id="article" cols="30" rows="10" required>'.$contenu.'</textarea>';
                echo '<input type="hidden" value="'.$_POST['truc'].'" name="truc"/>';
            } else {
        ?>
        <textarea name="article" id="article" cols="30" rows="10" required></textarea>
        <?php } ?>
        <input type="submit" name="creer" value="Poster"/>
    </form>
</main>
<?php include("footer.html"); ?>