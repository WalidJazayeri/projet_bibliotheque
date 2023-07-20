<?php include "header.php"
?>

<?php


$idLivre = $_GET['id'];
$sql = "SELECT book.title, book.publication_date, book.language, book.description, author.firstname, author.lastname, category.name, publisher.name
FROM book
JOIN author ON author.id=book.author_id
JOIN category ON category.id=book.category_id
JOIN publisher ON publisher.id=publisher_id
WHERE book.id={$idLivre}";

$statement = $pdo->query($sql);
$livre = $statement->fetch(PDO::FETCH_ASSOC);
echo "Tittle : {$livre['title']}";
echo BR;
echo "Publication : {$livre['publication_date']}";
echo BR;
echo "Langue : {$livre['language']}";
echo BR;
echo "Description : {$livre['description']}";
echo BR;
echo "Auteur : {$livre['firstname']} {$livre['lastname']}";
echo BR;
echo "Categorie : {$livre['name']}";
?>

<?php include "footer.php" ?>