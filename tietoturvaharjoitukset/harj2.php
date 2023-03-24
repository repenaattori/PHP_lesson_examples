<?php
require "../dbconnection.php";
$dbcon = createDbConnection();

$body = file_get_contents("php://input");
$data = json_decode($body);

$customerNumber = strip_tags($data->customerNumber);
//Filter poistaa kokonaisluvusta ylimääräiset merkit ympäriltä,
$customerNumber = filter_var($customerNumber, FILTER_SANITIZE_NUMBER_INT );
$checkNumber =  strip_tags($data->checkNumber);
$date = strip_tags($data->date);
$amount = strip_tags($data->amount);
//Filter poistaa desimaaliluvusta ylimääräiset merkit
$amount = filter_var($amount, FILTER_SANITIZE_NUMBER_FLOAT);

$sql = "INSERT INTO payments VALUES (?,?,?,?)";
$statement = $dbcon->prepare($sql);

$statement->execute(array($customerNumber,$checkNumber,$date, $amount));



