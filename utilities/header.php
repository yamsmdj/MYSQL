<?php
require dirname(__DIR__) . ('/config/config.php');
require dirname(__DIR__) . ('/function/database.fn.php');
$db = getPDOlink($config);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="apple-touch-icon" sizes="180x180" href="/asset/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/asset/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/asset/favicon/favicon-16x16.png">
  <link rel="manifest" href="/asset/favicon/site.webmanifest">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Utopia</title>
</head>
<body>