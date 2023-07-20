<?php include 'header.php' ?>

<h1>Les Auteurs</h1>
<br>

<?php

$sql = "SELECT * FROM author";
$statement = $pdo->query($sql);
$auteurs = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($auteurs as $auteur){
    echo "{$auteur['firstname']} {$auteur['lastname']} : <a href=\"detail_auteur.php?id={$auteur['id']}\">Detail</a>";
    echo BR;
}
?>

<?php include 'footer.php' ?>
