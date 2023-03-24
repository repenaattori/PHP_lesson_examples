<?php
require "../dbconnection.php";
$dbcon = createDbConnection();

$body = file_get_contents("php://input");
$data = json_decode($body);

$sql = "INSERT INTO offices 
 (officeCode,city,phone,addressLine1,addressLine2,state,country,postalCode, territory) VALUES
 (?,?,?,?,?,?,?,?,?)";
$statement  = $dbcon->prepare($sql);

foreach ($data as $o) {
    $statement->execute(array(
        $o->oc,$o->city,$o->phone,$o->a1,$o->a2,$o->state,$o->country,$o->pc,$o->territory
    ));
}