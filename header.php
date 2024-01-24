<?php
  //On defini nos variables d'environnement :
  $config = array(
    'dbhost' => 'localhost',
    'dbname' => 'dbmovie_utopia',
    'dbport' => '3306',
    'dbuser' => 'root',
    'dbpass' => ''
  );

  // DSN de connexion :
  $dsn = 'mysql:dbname=' . $config['dbname'] . ';host=' . $config['dbhost'] . ';port=' . $config['dbport'];

  // On tenter de se connecter à la base de données :
  try {

    // On instancie l'objet PDO :
    $db = new PDO($dsn, $config['dbuser'], $config['dbpass']);

    // On envoi nos requetes en utf8 :
    $db->exec("SET NAMES utf8");

    // On definit le mode de fetch par defaut :
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

  } catch (PDOException $e) {
    exit('BDD Erreur de connexion : ' . $e->getMessage());
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Utopia</title>
</head>
<body>