<?php include 'header.php' ?>

<h1>Les utilisateurs</h1>
<br>


<?php
session_start();
$users = [
    0 => ["id" => "1",
    "pseudo" => "Jean",
    "password" => "petitMdp"],

    1 => ["id" => "2",
    "pseudo" => "Jean2",
    "password" => "moyenMdp"],

    2 => ["id" => "3",
    "pseudo" => "Jean3",
    "password" => "grandMdp"]
];
$_SESSION['ID']=$users;

foreach($users as $user){
    
    echo 'Pseudo de l\'utilisateur n° '.$user['id'].' : <a href="detail_user.php/?id='.$user['id'].'&pseudo='.$user['pseudo'].'">Détail</a> <hr>';
}
?>

<?php include 'footer.php' ?>
