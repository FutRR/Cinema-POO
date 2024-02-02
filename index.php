<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$r1 = new Realisateur("Eggers", "Robert", "07-07-1983", "M");
$r2 = new Realisateur("Lucas", "George", "14-05-1944", "M");

$f1 = new Film("The Northman", "11-05-2022", 137, $r1);
$f2 = new Film("The Lighthouse", "18-12-2019", 110, $r1);

$f3 = new Film("Star Wars - Episode IV : A New Hope", "19-10-1977", 121, $r2);


echo $r1->getInfos();

echo $r2->getInfos();