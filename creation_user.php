<?php include 'header.php' ?>

    Inscription
<form action="confirm_creation_user.php" method="POST" class="form-example">
  <div class="form-example">
    <label for="pseudo">Votre pseudo :</label>
    <input type="text" name="pseudo" id="pseudo" required>
  </div>
  <div class="form-example">
    <label for="mdp">Password : </label>
    <input type="password" name="mdp" id="mdp" required>
  </div>
  <div class="form-example">
    <input type="submit" value="Envoyer">
  </div>
</form>

<?php include 'footer.php' ?>