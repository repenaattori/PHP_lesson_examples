<?php
require "dbconnection.php";
$dbcon = createDbConnection();

$money = 30;
$customer1 = "Mark";
$customer2 = "Lisa";

try{
    $dbcon->beginTransaction();

    $statement = $dbcon->prepare("UPDATE accounts SET balance=balance+? WHERE owner=?");
    $statement->execute(array(-$money, $customer1));

    $statement->execute(array($money, "Pekka"));

    $dbcon->commit();
}catch(Exception $e){

    $dbcon->rollBack();

    echo $e->getMessage();
}