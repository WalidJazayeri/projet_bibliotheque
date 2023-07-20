<?php include 'header.php' ?>

    <h1>Creation of author</h1>
    <form action="confirm_creation_auteur.php" method="GET" class="form-example">
  <div class="form-example">
    <label for="lastname">Enter your lastname: </label>
    <input type="text" name="lastname" id="lastname" required>
  </div>
  <div class="form-example">
    <label for="firstname">Enter your firstname: </label>
    <input type="text" name="firstname" id="firstname" required>
  </div>
  <div class="form-example">
    <input type="submit" value="Envoyer">
  </div>
</form>

<?php include 'footer.php' ?>