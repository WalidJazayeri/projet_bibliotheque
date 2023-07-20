<?php include 'header.php' ?>

<h1>Les des livres</h1>
<br>

<?php

$sql = "SELECT * FROM book";
$statement = $pdo->query($sql);
$livres = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($livres as $livre){
    echo "{$livre['title']} : <a href=detail_livre.php?id={$livre['id']}>Detail</a> 
    - <a href=supprimer_livre.php?id={$livre['id']}>Supprimer un livre</a>
    - <a href=modifier_livre.php?id={$livre['id']}>Modifier un livre</a>".BR;
}
?>

<?php include 'footer.php' ?>


<?php


// include('parts/_dbconnect.php');


// if (!empty($_POST["add_autor"])) {
// if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['sexe'])) {
//     echo "Tous les champs sont obligatoires.";
// } else {


//     $sql = "INSERT into `autor` (`firstname`, `lastname`, `sexe`, `date`) 
//                 VALUES (:firstname, :lastname, :sexe, :birth)";
//     $req = $pdo->prepare($sql);


//     $req->bindParam(':firstname', $_POST['firstname'], PDO::PARAM_STR);
//     $req->bindParam(':lastname', $_POST['lastname'], PDO::PARAM_STR);
//     $req->bindParam(':sexe', $_POST['sexe'], PDO::PARAM_BOOL);
//     $req->bindParam(':birth', $_POST['birth'], PDO::PARAM_STR);


//     $res = $req->execute();
//     if ($res) {
//         echo "L'auteur a bien été ajouté";
//         echo "<a href='/index.php'>Retour<a/>";
//     } else {
//         echo "Erreur lors de l'ajout";
//     }
// }
// }

?>
