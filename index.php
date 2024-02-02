<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

// Genre
$action = new Genre("Action");
$sf = new Genre("SF");
$horreur = new Genre("Horreur");

// Role
$amleth = new Role("Amleth");
$hanSolo = new Role("Han Solo");

// Acteurs
$skarsgard = new Acteur("Skasgard", "Alexander", "25-08-1976", "M", $amleth);
$ford = new Acteur("Ford", "Harrison", "13-07-1942", "M", $hanSolo);
$ehrenreich = new Acteur("Ehrenreich", "Alden", "22-11-1989", "M", $hanSolo);

// Realisateurs
$eggers = new Realisateur("Eggers", "Robert", "07-07-1983", "M");
$lucas = new Realisateur("Lucas", "George", "14-05-1944", "M");
$howard = new Realisateur("Howard", "Ron", "01-03-1954", "M");

// Films
$theNorthman = new Film("The Northman", "11-05-2022", 137, $eggers, $action);
$theLighthouse = new Film("The Lighthouse", "18-12-2019", 110, $eggers, $horreur);

$starWars4 = new Film("Star Wars - Episode IV : A New Hope", "19-10-1977", 121, $lucas, $sf);

$starWarsSolo = new Film("Solo : A Star Wars Story", "23-05-2018", 135, $howard, $sf);

$castingAmleth = new Casting($skarsgard, $amleth, $theNorthman);
// Tests

echo $eggers->getInfos();

echo $sf->getInfos();

echo $hanSolo->getInfos();