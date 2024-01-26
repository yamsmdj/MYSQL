<?php 
 require_once __DIR__ . ('/function/database.fn.php');
 require_once __DIR__ . ('/config/config.php');
 $db = getPDOlink($config);
 require_once __DIR__ . ('/function/movie.fn.php');
 $film = findMovies($db, $_GET['id']); 
 if (!isset($_GET['id']) ||empty($film['id'])) {
   header("location: /");
} else {
    $title = $film['title'];
}
  $picture = findPictureByMovie($db, $_GET['id']);
  $path = $picture['pathimg'];
  // $stars =  $film['rating']/2;
  // echo $stars;


 require_once __DIR__ . ('/utilities/header.php');
?>


<h1 class="text-center py-5">Detail du film <?= $title ?></h1>

<div class="card w-50 m-auto" >
  <img src="<?=$path ?>" alt="<?= $film['title'] ?>">
  <div class="card-body text-center">
    <h5 class="card-title text-uppercase fs-2"><?= $title ?></h5>
    <p class="card-text ">par : <?= $film['director'] ?></p>
      <p class="card-text">année de réalisation : <?= $film['year_released'] ?></p>
      <p class="card-text">de : <?= $film['distributeur'] ?></p>
      <p class="card-text">note des spéctateurs : <?= $film['rating'] ?></p>
      <p class="card-text">nbr d'entrés : <?= $film['box_office'] ?></p>
      <p class="card-text">durée : <?= $film['duration'] ?></p>
      <p class="card-text">coût de production : <?= $film['budget'] ?></p>
      <p class="card-text">genre : <?= $film['genre'] ?></p>
      <p class="card-text">languages : <?= $film['languages'] ?></p>
  </div>
</div>

</body>
</html>