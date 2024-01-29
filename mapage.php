<?php 
 require_once __DIR__ . ('/function/database.fn.php');
 require_once __DIR__ . ('/config/config.php');
 $db = getPDOlink($config);
 require_once __DIR__ . ('/function/movie.fn.php');
 $film = findMovies($db, $_GET['id']); 
 if (!isset($_GET['id']) || empty($film['id'])) {
   header("location: /");
} else {
    $title = $film['title'];
}
  $picture = findPictureByMovie($db, $_GET['id']);
  $path = $picture['pathimg'];
  $stars =  $film['rating']/2;
  echo $stars;
 require_once __DIR__ . ('/utilities/header.php');
?>

<h1 class="text-center py-5">Detail du film <?= $title ?></h1>
<?php require "utilities/card.php" ?>
<?php require_once __DIR__ . ("/utilities/footer.php")?>
</body>
</html>