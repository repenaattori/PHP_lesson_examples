<?php

// if(!isset($_POST["username"]) || !isset($_POST["pw"])){
//     echo "You did not define parameter!";
//     exit;
// }

// echo "<h1>".$_POST["username"]."</h1>";
// echo $_POST["pw"];

$body = file_get_contents("php://input");

$users = json_decode($body);

foreach($users as $user){
    echo $user->username."<br>";
}
