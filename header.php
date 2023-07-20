<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation of book</title>
</head>
<body>
<a href="http://localhost:8000/creation_auteur.php">Creation d'un auteur</a>
<a href="http://localhost:8000/creation_categorie.php">Creer une catégorie</a>
<a href="http://localhost:8000/creation_livre.php">Creer un livre</a>
<a href="http://localhost:8000/creation_edition.php">Creer une édition</a>
<a href="http://localhost:8000/list_book.php">Liste des livres</a>
<a href="http://localhost:8000/list_auteurs.php">Liste des auteurs</a>
<a href="http://localhost:8000/list_category.php">Liste des catégories</a>
<a href="http://localhost:8000/list_user.php">Liste des utilisateurs</a>
<a href="http://localhost:8000/list_publisher.php">Liste des Editeurs</a>
<a href="http://localhost:8000/creation_user.php">S'inscrire</a>
<a href="http://localhost:8000/authentification.php">Se Connecter</a>

<br>
<?php session_start();
define ('BR',' <br>');
function dump($arg){
    echo "<pre>";
    var_dump($arg);
    echo "</pre>";
}
?>
<?php include 'db_connect.php' ?>