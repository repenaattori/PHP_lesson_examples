<?php
require "dbconnection.php";
$dbcon = createDbConnection();

$sql = "INSERT INTO productlines (productLine, textDescription) 
    VALUES ('Bikes','Fast bikes for every usage'),('Scooters', 'Colorful scooters')";

$dbcon->exec($sql);

$sql = "INSERT INTO products VALUES 
    ('BK_123','Helkama Kaunotar', 'Bikes', '1:8', 'Helkama', 'Basic bike', 100, 18, 24),
    ('BK_453','Tunturi golden', 'Bikes', '1:8', 'Tunturi', 'MTB bike', 35, 12, 23)";

$dbcon->exec($sql);
