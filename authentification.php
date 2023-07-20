<?php include 'header.php';
session_start();
?>
<br>
<h1>S'authentifier</h1>
<form action="confirm_authentification.php" method="POST" class="form-example">

<div class="form-example">
  <label for="pseudo_user_co">Votre pseudo :</label>
  <input type="text" name="pseudo_user_co" id="pseudo_user_co" required>
</div>

<div class="form-example">
  <label for="pseudo_mdp_co">Password : </label>
  <input type="password" name="pseudo_mdp_co" id="pseudo_mdp_co" required>
</div>
<div class="form-example">
  <input type="submit" value="Envoyer">
</div>
</form>

<?php include 'footer.php' ?>

