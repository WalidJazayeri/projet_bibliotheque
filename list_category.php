<?php include 'header.php' ?>

<h1>Les differentes categories</h1>
<br>
<?php

$sql = "SELECT * FROM category";
$statement = $pdo->query($sql);
$categories = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($categories as $categorie){
    echo "{$categorie['name']}".BR;
}
?>

<?php include 'footer.php' ?>