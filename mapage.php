<?php 
 require_once __DIR__ . ('/utilities/header.php');
 require_once __DIR__ . ('/function/database.fn.php');
 $db = getPDOlink($config);
 
 require_once __DIR__ . ('/function/movie.fn.php');
 $film = findMovies($db, $_GET['id']); 
 $title = $film['title'];
 require_once __DIR__ . ('/utilities/header.php');
?>
  <h1>Detail du film <?= $title ?></h1>
  <h2><?= $film['title'] ?></h2>
  <p>année de réalisation : <?= $film['year_released'] ?></p>
  <p>par : <?= $film['director'] ?></p>
  <p>de : <?= $film['distributeur'] ?></p>
  <p>note des spéctateurs : <?= $film['rating'] ?></p>
  <p>nbr d'entrés : <?= $film['box_office'] ?></p>
  <p>durée : <?= $film['duration'] ?></p>
  <p>coût de production : <?= $film['budget'] ?></p>
  <p>genre : <?= $film['genre'] ?></p>
  <p>languages : <?= $film['languages'] ?></p>
  

</body>
</html>