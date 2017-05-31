<?php include("header.html"); ?>
<main>
    <form method="post" action="create-file.php">
        <input type="text" name="titre" required/>
        <textarea name="article" id="article" cols="30" rows="10" required></textarea>
        <input type="submit" />
    </form>
</main>
<?php include("footer.html"); ?>