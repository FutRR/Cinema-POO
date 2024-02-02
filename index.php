<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$r1 = new Realisateur("Robert", "Eggers", "07-07-1983", "M");

$f1 = new Film("The Northman", "11-05-2022", 137, $r1);


echo $r1->getInfos();