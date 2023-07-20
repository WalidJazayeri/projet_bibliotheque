<?php include "header.php"
?>

<?php


?>
<h1>Détail du livre n° <?php echo $_GET['id'] ?></h1>
<p>Titre du livre : <?php echo urldecode($_GET['titre']) ?></p>
<?php include "footer.php" ?>