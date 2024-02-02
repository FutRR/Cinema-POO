<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

// Genre
$sf = new Genre("SF");
$aventure = new Genre("Aventure");

// Role
$hanSolo = new Role("Han Solo");
$indianaJones = new Role("Indiana Jones");

// Acteurs
$ford = new Acteur("Ford", "Harrison", "13-07-1942", "M");
$ehrenreich = new Acteur("Ehrenreich", "Alden", "22-11-1989", "M");

// Realisateurs
$lucas = new Realisateur("Lucas", "George", "14-05-1944", "M");
$howard = new Realisateur("Howard", "Ron", "01-03-1954", "M");
$spielberg = new Realisateur("Spielberg", "Steven", "18-12-1946", "M");

// Films


$indianaJones1 = new Film("Les Aventuriers de l'Arche Perdue", "16-09-1981", 115, $spielberg, $aventure);
$indianaJones2 = new Film("Indiana Jones et le Temple Maudit", "12-09-1984", 118, $spielberg, $aventure);

$starWars4 = new Film("Star Wars - Episode IV : A New Hope", "19-10-1977", 121, $lucas, $sf);
$starWarsSolo = new Film("Solo : A Star Wars Story", "23-05-2018", 135, $howard, $sf);

// Castings
$castingIndianaJones = new Casting($ford, $indianaJones, $indianaJones1);
$castingIndianaJones2 = new Casting($ford, $indianaJones, $indianaJones2);


$castingHanSolo = new Casting($ford, $hanSolo, $starWars4);
$castingHanSolo2 = new Casting($ehrenreich, $hanSolo, $starWarsSolo);

// Tests

echo $lucas->afficherFilmographie();

echo $sf->afficherFilms();

echo $hanSolo->afficherActeurs();

echo $ford->afficherRoles();

echo $indianaJones1->afficherCasting();