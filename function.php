<?php

// Il faut mettre le nom de la table SQL qu'on veut récupérer
// et faire $nom_tableau=connect_list($'nom_tab_sql')
//et ensuite foreach le tableau
function connect_list(string $nom_tab_sql):array 
{
    $pdo = new \PDO('mysql:host=localhost;dbname=library_db','root','');
    $sql = "SELECT * FROM {$nom_tab_sql}";
    $statement = $pdo->query($sql);
    $nom_tab = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $nom_tab;
}
?>