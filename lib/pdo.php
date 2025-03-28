<?php
try
{
    $pdo = new PDO("mysql:dbname=check_it;host=localhost;charset=utf8mb4", "masterofall", "SayMyName@SayMyName");
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>