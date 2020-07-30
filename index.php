<?php
require "animal.php";
require "frog.php";
require "ape.php";

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>" ;
echo $sheep->cold_blooded; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

// ape.php
$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

//tentang frog.php
$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"

