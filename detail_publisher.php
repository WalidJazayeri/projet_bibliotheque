<?php include "header.php"
?>

<?php


$idPublisher = $_GET['id'];
$sql = "SELECT `name` 
FROM publisher
WHERE publisher.id={$idPublisher}";

$statement = $pdo->query($sql);
$publisher = $statement->fetch(PDO::FETCH_ASSOC);
echo "Nom de l'éditeur : {$publisher['name']}";

?>

<?php include "footer.php" ?>