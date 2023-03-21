<?php
require "dbconnection.php";
$dbcon = createDbConnection();

/**
 * Ensimmäinen osa
 */

 //Haetaan ja tulostetaan product linet
$sql = "SELECT textDescription FROM productlines";
$statement = $dbcon->prepare($sql);
$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row){
    echo $row["textDescription"]."<hr>"; 
}

/**
 * Toinen osa
 */

//Haetaan ja tulostetaan asiakkaiden maat.
$sql = "SELECT * FROM customers";
$statement = $dbcon->prepare($sql);
$statement->execute();

//Asiakkaan maa on sarakkeessa 10 tietokantataulussa
$countries = $statement->fetchAll(PDO::FETCH_COLUMN, 10);

foreach($countries as $country){
    echo $country."<br>";
}

/**
 * Kolmas osa
 */

$sql = "SELECT * FROM offices";
$statement = $dbcon->prepare($sql);
$statement->execute();

$officeRow = $statement->fetch(PDO::FETCH_ASSOC);
$officeCode = $officeRow["officeCode"];

$sql = "SELECT email FROM employees WHERE officeCode=".$officeCode;
$statement = $dbcon->prepare($sql);
$statement->execute();

$emails =  $statement->fetchAll(PDO::FETCH_COLUMN);

echo "<h2>".$officeRow["city"]."</h2>";

foreach($emails as $email){
    echo $email."<br>";
}
