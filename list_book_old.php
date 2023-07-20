<?php include 'header.php' ?>

<h1>Les des livres</h1>
<br>

<?php

$livres = [
    0 => ["id" => 1,
    "titre" => "le petit poucet"],
    1 => ["id" => 2,
    "titre" => "le Moyen poucet"],
    2 => ["id" => 3,
    "titre" => "le GRAND poucet"]
];
foreach ($livres as $livre){
  //  var_dump($livre);
  echo 'Livre n° '.$livre['id'].' : <a href=detail_livre.php/?id='.$livre['id'].'&titre='.urlencode($livre['titre']).'>Détail</a>
  - <a href=supprimer_livre.php?id=$livre[id]>Supprimer un livre</a>
  - <a href=modifier_livre.php?id=$livre[id]>Modifier un livre</a> <hr>';

}


// for ($i=1;$i <= 1000;$i++){
//    
//     - <a href=modifier_livre.php?id=$i>Modifier un livre</a> <hr>";
// }


?>

<?php include 'footer.php' ?>