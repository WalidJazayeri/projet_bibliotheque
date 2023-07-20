<?php include 'header.php' ?>

<h1>Les des livres</h1>
<br>

<?php

$sql = "SELECT * FROM publisher";
$statement = $pdo->query($sql);
$editeurs = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($editeurs as $editeur){
    echo $editeur['name'].' : <a href="detail_livre.php?id='.$editeur['id'].'">Detail</a>'.BR;
}
?>

<?php include 'footer.php' ?>