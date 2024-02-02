<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$action = new Genre("Action");
$sf = new Genre("SF");
$horreur = new Genre("Horreur");

$eggers = new Realisateur("Eggers", "Robert", "07-07-1983", "M");
$lucas = new Realisateur("Lucas", "George", "14-05-1944", "M");

$theNorthman = new Film("The Northman", "11-05-2022", 137, $eggers, $action);
$theLighthouse = new Film("The Lighthouse", "18-12-2019", 110, $eggers, $horreur);

$starWars4 = new Film("Star Wars - Episode IV : A New Hope", "19-10-1977", 121, $lucas, $sf);


echo $eggers->getInfos();

echo $lucas->getInfos();

echo $action->getInfos();