<?php

function findAllMovies ($db) {
    $sql = "SELECT * FROM `movies`;";
    $requete = $db->query($sql);
    $films = $requete->fetchAll();
    return $films;
}

function findMovies ($db, $currentId) {
    $sql = "SELECT 
    m.id, m.title, m.rating, m.year_released, 
    m.box_office, m.budget, m.duration, 
    d.name AS director,
    dc.name AS distributeur,
    g.name AS genre,
    GROUP_CONCAT(l.name SEPARATOR ', ') as languages
    FROM `movies` AS m 
    INNER JOIN director d ON m.directorID = d.id
    INNER JOIN distribution_company dc ON m.companyID = dc.id
    INNER JOIN genre g ON m.genreID = g.id
    INNER JOIN movie_language ml ON m.id = ml.movieID
    JOIN languages l ON ml.languageID = l.id
    WHERE m.id = $currentId";
    $requete = $db->query($sql);
    $result = $requete->fetch();
    return $result;
};