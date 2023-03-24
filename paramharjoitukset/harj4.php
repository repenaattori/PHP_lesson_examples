<?php

$body = file_get_contents("php://input");

$data = json_decode($body);


$fname = $data->fname;
$lname = $data->lname;
$address = $data->address;


echo $fname." ".$lname." ".$address;
