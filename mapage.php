<?php 
    require('./header.php'); 
// Inclut le contenu du fichier header.php. Ce fichier peut contenir des éléments d’en-tête HTML communs à plusieurs pages,
//  comme la balise <head>, le menu de navigation, etc.

    $currentId = $_GET['id'];
//  Récupère l’identifiant du film à partir de l’URL de la page.
//  Par exemple, si l’URL est www.example.com/movie.php?id=123, alors $currentId sera 123.

    $sql = "SELECT 
    m.id, m.title, m.rating, m.year_released, 
    m.box_office, m.budget, m.duration, 
    d.name AS director,
    dc.name AS distributeur,
    l.name AS languages
    FROM `movies` AS m 
    INNER JOIN director d ON m.directorID = d.id
    INNER JOIN distribution_company dc ON m.companyID = dc.id
    INNER JOIN movie_language ml ON m.id = ml.movieID
    JOIN languages l ON ml.languageID = l.id
    WHERE m.id = $currentId";
// Sélectionne plusieurs colonnes de la table movies, ainsi que le nom du réalisateur de
// la table director et le nom de la société de distribution de la table distribution_company,
// pour le film dont l’identifiant est $currentId

    $requete = $db->query($sql);
// Exécute la requête SQL sur la base de données

    $film = $requete->fetch();
// Récupère le résultat de la requête SQL. Le résultat est un tableau associatif où chaque clé est le nom d’une
// colonne sélectionnée par la requête SQL.
?>

  <h1>Detail du film</h1>
  <h2><?= $film['title'] ?></h2>
  <p>année de réalisation : <?= $film['year_released'] ?></p>
  <p>par : <?= $film['director'] ?></p>
  <p>de : <?= $film['distributeur'] ?></p>
  <p>note des spéctateurs : <?= $film['rating'] ?></p>
  <p>nbr d'entrés : <?= $film['box_office'] ?></p>
  <p>durée : <?= $film['duration'] ?></p>
  <p>coût de production : <?= $film['budget'] ?></p>
  <p>Language : <?= $film['languages'] ?><p>
  
<!-- Affichent les détails du film à l’aide des valeurs du tableau $film -->
</body>
</html>