<?php include "header.php"
?>

<?php


$idAuteur = $_GET['id'];
$sql = "SELECT *
FROM author
WHERE author.id={$idAuteur}";

$statement = $pdo->query($sql);
$auteur = $statement->fetch(PDO::FETCH_ASSOC);
echo "Prénom : {$auteur['firstname']}";
echo BR;
echo "Nom : {$auteur['lastname']}";
echo BR;
echo "Année de naissance : {$auteur['birthdate']}";
echo BR;
echo "Biographie : {$auteur['biography']}";
?>

<?php include "footer.php" ?>