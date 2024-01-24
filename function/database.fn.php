<?php
function getPDOlink($config){
      // DSN de connexion :
  $dsn = 'mysql:dbname=' . $config['dbname'] . ';host=' . $config['dbhost'] . ';port=' . $config['dbport'];
  
  try {
    $db = new PDO($dsn, $config['dbuser'], $config['dbpass']);
    $db->exec("SET NAMES utf8");
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
  } catch (PDOException $e) {
    exit('BDD Erreur de connexion : ' . $e->getMessage());
  }
}

?>