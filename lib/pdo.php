<?php
try
{
    $pdo = new PDO("mysql:dbname=check_it;host=localhost;charset=utf8mb4", "root", "");
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>