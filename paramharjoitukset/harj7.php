<?php
$body = file_get_contents("php://input");
$data = json_decode($body);

$finName = $data[0]->name->nativeName->fin->official;
$sweName = $data[0]->name->nativeName->swe->official;

echo $finName." ".$sweName;