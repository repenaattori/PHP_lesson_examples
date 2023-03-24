<?php
$body = file_get_contents("php://input");
$data = json_decode($body);

echo "<ul>";

foreach($data as $game){
    echo "<li>".$game->title."</li>";
}

//Seuraava koodi muodostaa kuvat pelien thumbnaileista.
// foreach($data as $game){
//     $url = $game->thumbnail;
//     echo "<img src=".$url."/>";
// }

echo "</ul>";