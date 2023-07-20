<?php include 'header.php' ?>

    <h1>Création d'édition</h1>
<form action="confirm.php" method="GET" class="form-example">
  <div class="form-example">
    <label for="name">Enter le nom de l'édition : </label>
    <input type="text" name="name" id="name" required>
  </div>
  <div class="form-example">
    <input type="submit" value="Envoyer">
  </div>
</form>

<?php include 'footer.php' ?>