<?php


var_dump($_POST);
echo "<br>";
echo 'ID: '.$_POST['pseudo'].'<br>';

$c_ID = $_POST['pseudo'];
$c_pass = $POST['mdp'];
$sql = "INSERT INTO book.title, book.publication_date, book.language, book.description, author.firstname, author.lastname, category.name, publisher.name
FROM book
JOIN author ON author.id=book.author_id
JOIN category ON category.id=book.category_id
JOIN publisher ON publisher.id=publisher_id
WHERE book.id=:monidprotege";


$statement = $pdo->prepare($sql);
$statement->bindValue(':monidprotege', $idLivre, \PDO::PARAM_INT);
$statement->execute();
$livre = $statement->fetch(PDO::FETCH_ASSOC);
?>