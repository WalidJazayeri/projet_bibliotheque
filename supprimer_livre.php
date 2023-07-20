<?php include "header.php"
?>

<?php


$idLivre = $_GET['id'];
$sql = "DELETE FROM `library_has_book` 
WHERE `id` = '$idLivre';

DELETE FROM `book`
WHERE book.id={$idLivre}";
$statement = $pdo->query($sql);

echo "SUCESS";

?>

<?php include "footer.php" 
// DELETE FROM <table>
// WHERE <conditions>;
// $livre = $statement->fetch(PDO::FETCH_ASSOC);
?>