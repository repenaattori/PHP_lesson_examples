<?php
require "dbconnection.php";
$dbcon = createDbConnection();

//Käyttäjän antamat tiedot
$password = $_POST["pw"];
$username = $_POST["uname"];

$command ="SELECT * FROM customer WHERE username=? AND password=?";
$statement = $dbcon->prepare($command);
// $statement->bindParam(2, $password);
// $statement->bindParam(1, $username);
$statement->execute(array($username, $password));

$password = "xxxx";
$username = "asdfasfa";

$statement->execute();

