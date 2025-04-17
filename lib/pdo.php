<?php

/*$url = getenv('JAWSDB_MARIA_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');


try
{
    $pdo = new PDO("mysql:dbname=$database;host=$hostname;charset=utf8mb4", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch (PDOException $e)
{
        echo "Connection failed: " . $e->getMessage();
}
?>*/


try
{
    $pdo = new PDO("mysql:dbname=check_it;host=localhost;charset=utf8mb4", "###", "###");
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>