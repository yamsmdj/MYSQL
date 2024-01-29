<?php
require (__DIR__) . ('/utilities/header.php'); 
require (__DIR__) . ('/function/movie.fn.php'); 


if (isset($_POST ['limits'])) {
  $limit = $_POST['limits'] ;
} else {
  $limit = 3 ;
}

$films = Top3Movies($db, $limit); 
?>

<div class="py-4">
  <h1 class="text-center">TOP FILM</h1>
<form method="post" class="d-flex justify-content-center w-25" >
  <select name="limits" class="form-select" aria-label="Default select example">
    <option selected>Choisissez les films</option>
    <option value="3" > Les 3 meilleurs films  </option>
    <option value="5" > Les 5 meilleurs films  </option>
    <option value="10"> Les 10 meilleurs films </option>
  </select>
  <button type="submit">Changer</button>
</form>
  
  <div class="d-flex flex-wrap justify-content-center">
  <?php foreach ($films as $film) { ?>
      <p class="py-4 px-2">
        <a class="alert alert-info w-100" href="mapage.php?id=<?= $film['id'] ?>"><?= $film['title'] ?></a>
      </p>
      <?php } ?>
  </div>
</div>
<?php require "utilities/footer.php"?>

</body>
</html>