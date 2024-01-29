<?php
require (__DIR__) . ('/utilities/header.php'); 
require (__DIR__) . ('/function/movie.fn.php'); 
$films = findAllMovies($db); 
?>

  <h1>Les films Utopia</h1>
<?php foreach ($films as $film) { ?>
    <p>
      <a href="mapage.php?id=<?= $film['id'] ?>"><?= $film['title'] ?></a>
    </p>
<?php } ?>
<?php require "utilities/footer.php"?>

</body>
</html>