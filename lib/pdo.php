<?php
try
{
    $pdo = new PDO("mysql:dbname=$datablase;host=$hostname;charset=utf8mb4", $username, $password);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>