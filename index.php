<?php
require "dbconnection.php";
$dbcon = createDbConnection();

// $sql = "CREATE TABLE person( 
//     id INT NOT NULL AUTO_INCREMENT, name VARCHAR(50) NOT NULL,
//     PRIMARY KEY(id) 
// )";

$sql = "INSERT INTO person (name) VALUES ('Marko')";


$dbcon->exec($sql);

$lastId = $dbcon->lastInsertId();

echo "Id for Marko was ".$lastId;