<?php

function getCategories(PDO $pdo)
{
    $query = $pdo->prepare("SELECT * from category");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}
