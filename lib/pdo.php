<?php
try
{
    $pdo = new PDO("mysql:dbname=$database;host=$hostname;charset=utf8mb4", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch (PDOException $e)
{
        echo "Connection failed: " . $e->getMessage();
}
?>