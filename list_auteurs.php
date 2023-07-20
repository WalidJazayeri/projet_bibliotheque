<?php include 'header.php';
include 'function.php';
?>

<h1>Les Auteurs</h1>
<br>

<?php

$auteurs=connect_list('author');
foreach($auteurs as $auteur){
    echo "{$auteur['firstname']} {$auteur['lastname']} : <a href=\"detail_auteur.php?id={$auteur['id']}\">Detail</a>";
    echo BR;
}
?>

<?php include 'footer.php' ?>
