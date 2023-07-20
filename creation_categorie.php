<?php include 'header.php' ?>

    <h1>Creation of category</h1>
    <form action="confirm_creation_auteur.php" method="GET" class="form-example">
  <div class="form-example">
    <label for="name">Enter the name </label>
    <input type="text" name="name" id="name" required>
  </div>
  <div class="form-example">
    <input type="submit" value="Envoyer">
  </div>
</form>

<?php include 'footer.php' ?>