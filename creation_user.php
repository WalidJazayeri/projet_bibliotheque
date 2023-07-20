<?php include 'header.php' ?>

    Inscription
<form action="confirm_creation_user.php" method="POST" class="form-example">
  <div class="form-example">
    <label for="pseudo_user">Votre pseudo :</label>
    <input type="text" name="pseudo_user" id="pseudo_user" required>
  </div>
  <div class="form-example">
    <label for="pseudo_mdp">Password : </label>
    <input type="password" name="pseudo_mdp" id="pseudo_mdp" required>
  </div>
  <div class="form-example">
    <input type="submit" value="Envoyer">
  </div>
</form>

<?php include 'footer.php' ?>