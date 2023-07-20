<?php include 'header.php' ?>

<h1>Les éditeurs</h1>
<br>

<?php

$sql = "SELECT * FROM publisher";
$statement = $pdo->query($sql);
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($publishers as $publisher){
    echo $publisher['name'].' : <a href="detail_publisher.php?id='.$publisher['id'].'">Detail</a>'.BR;
}

?>

<?php include 'footer.php' ?>