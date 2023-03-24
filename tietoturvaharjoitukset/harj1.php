<?php

require "../dbconnection.php";
$dbcon = createDbConnection();

$producLineName = strip_tags($_POST["pname"]);
$desc =  strip_tags($_POST["desc"]);


$sql = "INSERT INTO productlines (productLine, textDescription) VALUES (?,?)";
$statement = $dbcon->prepare($sql);
$statement->execute(array($producLineName, $desc));
