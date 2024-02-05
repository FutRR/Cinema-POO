<h1>Cinema POO</h1>

<p>
<h3>Vous avez en charge de gérer différentes entités autour de la thématique du<br>
    cinéma.</h3>
Les films seront caractérisés par leur titre, leur date de sortie en France, leur durée (en minutes)<br>
ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film<br>
(synopsis) pourra éventuellement être renseigné. Chaque film est caractérisé par un seul genre<br>
cinématographique (science-fiction, aventure, action, ...).<br><br>
Votre application devra recenser également les acteurs de chacun des films. On désire connaître le<br>
nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage)<br>
joué par l’acteur dans le(s) film(s) concerné(s).<br><br>
Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de le mettre<br>
en place correctement !<br><br>
Attention, le rôle (par exemple James Bond) ne doit être instancié qu'une seule fois (dans la mesure<br>
où ce rôle a été incarné par plusieurs acteurs.)<br><br>
On doit pouvoir :<br>
-Lister la liste des acteurs ayant incarné un rôle précis (ex: les acteurs ayant joué le rôle de<br>
Batman : Michael Keaton, Val Kilmer, George Clooney, …)<br>
-Lister le casting d'un film (dans le film Star Wars Episode IV, Han Solo a été incarné par<br>
Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)<br>
-Lister les films par genre (exemple : le genre SF est associé à X films : Star Wars, Blade<br>
Runner, ...)<br>
-Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)<br>
-Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)
<h3>Il faudra d’abord faire un MCD répondant aux exigences citées ci-dessus et le<br>
    faire valider par un formateur avant de passer à la création des classes</h3>
</p>

<h2>Résultats</h2>


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
$marion = new Role("Marion Ravenwood");

// Acteurs
$ford = new Acteur("Ford", "Harrison", "13-07-1942", "M");
$ehrenreich = new Acteur("Ehrenreich", "Alden", "22-11-1989", "M");
$allen = new Acteur("Allen", "Karen", "05-10-1951", "F");

// Realisateurs
$lucas = new Realisateur("Lucas", "George", "14-05-1944", "M");
$howard = new Realisateur("Howard", "Ron", "01-03-1954", "M");
$spielberg = new Realisateur("Spielberg", "Steven", "18-12-1946", "M");

// Films
$indianaJones1 = new Film("Les Aventuriers de l'Arche Perdue", "16-09-1981", 115, $spielberg, $aventure);
$indianaJones2 = new Film("Indiana Jones et le Temple Maudit", "12-09-1984", 118, $spielberg, $aventure);

$starWars4 = new Film("Star Wars, Episode IV : A New Hope", "19-10-1977", 121, $lucas, $sf);
$starWarsSolo = new Film("Solo : A Star Wars Story", "23-05-2018", 135, $howard, $sf);

// Castings
$castingIndianaJones = new Casting($ford, $indianaJones, $indianaJones1);
$castingMarion = new Casting($allen, $marion, $indianaJones1);
$castingIndianaJones2 = new Casting($ford, $indianaJones, $indianaJones2);

$castingHanSolo = new Casting($ford, $hanSolo, $starWars4);
$castingHanSolo2 = new Casting($ehrenreich, $hanSolo, $starWarsSolo);

// Tests

echo $lucas->afficherFilmographie();

echo $spielberg->afficherFilmographie();

echo $sf->afficherFilms();

echo $aventure->afficherFilms();

echo $hanSolo->afficherActeurs();

echo $ford->afficherRoles();

echo $indianaJones1->afficherCasting();