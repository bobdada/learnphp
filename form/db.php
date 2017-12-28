
<?php

    $host = 'localhost';
    $dbname = 'testme';
    $username = 'root';
    $password = '';

 
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";

} catch (PDOException $pe) {

    die("Could not connect to the database $dbname :" . $pe->getMessage());

}


$sql="CREATE TABLE IF NOT EXISTS yoyo(
NAME VARCHAR(30),
EMAIL VARCHAR(150)
)";


$sql="INSERT INTO yoyo(NAME, EMAIL) VALUES('".$_POST["name"]."' , '".$_POST["email"]."')";
$conn->exec($sql);
?>
