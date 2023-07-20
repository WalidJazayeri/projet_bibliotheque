<?php include 'header.php' ?>

<h1>Les Auteurs</h1>
<br>

<?php

for ($i=1;$i <= 1000;$i++){
    
    echo "Auteurs n° $i : <a href=\"details.php/?id=$i\">Détail</a> <hr>";
}
?>

<?php include 'footer.php' ?>
