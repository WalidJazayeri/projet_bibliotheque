<?php
include 'header.php'
?>

<?php

dump($_POST);

$titleLivre = $_POST['title'];;
$publiDateLivre = $_POST['publication_date'];
$languageLivre = $_POST['language'];
$descriptionLivre = $_POST['description'];
$sql = "INSERT INTO book (title, publication_date, `language`, `description`)
VALUES ('{$_POST['title']}','{$_POST['publication_date']}','{$_POST['language']}','{$_POST['description']}')";

$statement = $pdo->query($sql);

$statement->execute();
$livre = $statement->fetch(PDO::FETCH_ASSOC);

echo "Sucess"

?>


<?php
include 'footer.php'
?>