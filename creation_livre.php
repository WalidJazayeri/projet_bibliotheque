<?php include 'header.php' ?>

    Creation of book
<form action="confirm_create_book.php" method="GET" class="form-example">
  <div class="form-example">
    <label for="name">Enter your title: </label>
    <input type="text" name="name" id="name" required>
  </div>
  <div class="form-example">
    <label for="nb_pages">Enter number of pages: </label>
    <input type="number" name="nb_pages" id="nb_pages" required>
  </div>
  <div class="form-example">
    <input type="submit" value="Envoyer">
  </div>
</form>

<?php include 'footer.php' ?>