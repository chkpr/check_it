<?php
try
{
    $pdo = new PDO("mysql:dbname=d342ylm8hvvqu1ol;host=am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;charset=utf8mb4", "gvf3ptewoxbqtg5o", "cpfc459cwi9gqbaf");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch (PDOException $e)
{
        echo "Connection failed: " . $e->getMessage();
}
?>