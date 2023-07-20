<?php include 'header.php' ?>

    Creation of book
<form action="confirm_create_book.php" method="POST" class="form-example">
  <div class="form-example">
    <label for="title">Enter your title: </label>
    <input type="text" name="title" id="title" required>
  </div>

  <div class="form-example">
    <label for="publication_date">Date de publication: </label>
    <input type="number" name="publication_date" id="publication_date" required>
  </div>

  <div class="form-example">
    <label for="language">Language : </label>
    <input type="text" name="language" id="language" required>
  </div>
  
  <div class="form-example">
    <label for="description">Description: </label>
    <input type="text" name="description" id="description" >
  </div>
  
  <div class="form-example">
    <input type="submit" value="Envoyer">
  </div>
  
</form>

<?php include 'footer.php' ?>