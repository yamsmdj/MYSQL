<?php require('./header.php'); ?>
<!-- Inclut le contenu du fichier header.php. Ce fichier peut contenir des éléments d’en-tête HTML communs à plusieurs pages,
 comme la balise <head>, le menu de navigation, etc. -->

  <h1>Les films Utopia</h1>
  <?php
    $sql = "SELECT * FROM `movies`;";
// Sélectionne toutes les colonnes de tous les films dans la table movies

    $requete = $db->query($sql);
// Execute la requete

    $films = $requete->fetchAll();
// Recupere les resultat dans le tableau $film
  ?>

  <?php foreach ($films as $film) { ?>
    <p>
      <a href="mapage.php?id=<?= $film['id'] ?>"><?= $film['title'] ?></a>
    </p>
  <?php } ?>
<!-- Pour chaque film dans le tableau $films, un lien est créé vers la page mapage.php.
L’identifiant du film est ajouté à l’URL du lien, et le titre du film est affiché comme texte du lien. -->
</body>
</html>