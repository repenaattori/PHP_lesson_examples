<?php
require "dbconnection.php";
$dbcon = createDbConnection();

$sql = "SELECT * FROM person";

$statement = $dbcon->prepare($sql);
$statement->execute();

// $firstRow = $statement->fetch(PDO::FETCH_ASSOC);
// $secondRow = $statement->fetch(PDO::FETCH_ASSOC);

//Haetaan tulosrivit vain assosiatiivisina tauluina
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

//Voidaan hakea myös vain yksi valittu sarake taulukkona arvoja
// $values = $statement->fetchAll(PDO::FETCH_COLUMN, 1);
// foreach($values as $value){
//     echo $value."<br>";
// }

// print_r($rows);

foreach ($rows as $row) {
    echo $row["id"].":".$row["name"]."<br>";
}



// $taulu = array();
// $taulu["etunimi"] = "Reima";
// $taulu["sukunimi"] = "Riihimäki";

// foreach ($taulu as $item) {
//     echo $item."<br>";
// }

// $fname = $taulu["etunimi"];
