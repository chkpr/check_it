<?php
try
{
    $pdo = new PDO("mysql://gvf3ptewoxbqtg5o:cpfc459cwi9gqbaf@am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/d342ylm8hvvqu1ol");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch (PDOException $e)
{
        echo "Connection failed: " . $e->getMessage();
}
?>