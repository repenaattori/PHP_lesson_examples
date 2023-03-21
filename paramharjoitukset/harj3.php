<?php

//Käydään läpi assosiatiivisen get-taulun avaimet ja arvot
foreach($_GET as $key => $value){
    echo $key.":".$value."<br>";
}

//Tämä käy läpi vain arvot
foreach($_GET as $value){
    echo $value."<br>";
}