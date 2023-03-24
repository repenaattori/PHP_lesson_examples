<?php

// $resp = array();
// $resp["name"] = "Reima";
// $resp["age"] = 23;

$allUsers = array();

$user1 = new stdClass();
$user1->name = "Reima";
$user1->age = 23;

$user2 = new stdClass();
$user2->name = "Liisa";
$user2->age = 19;

$allUsers[] = $user1;
$allUsers[] = $user2;

$json = json_encode($allUsers);

header('Content-type: application/json');
echo $json;
