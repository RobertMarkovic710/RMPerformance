<? php

$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "AsDf.555.HH";

try {
    $conn = new PDO("mysql:host=$dbServerName;dbname=loginsystem", $dbUsername, $dbPassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>