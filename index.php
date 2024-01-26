<?php
require (__DIR__) . ('/utilities/header.php'); 
require (__DIR__) . ('/function/movie.fn.php'); 
$films = findAllMovies($db); 
?>
<div class="m-auto w-50 py-4">
  <h1 class="text-center">Les films Utopia</h1>
  <div class="d-flex flex-wrap ">
  <?php foreach ($films as $film) { ?>
      <p class="py-4 px-2">
        <a class="alert alert-info w-100" href="mapage.php?id=<?= $film['id'] ?>"><?= $film['title'] ?></a>
      </p>
      <?php } ?>
  </div>
</div>
</body>
</html>