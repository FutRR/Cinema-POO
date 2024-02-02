<?php

class Acteur extends Personne
{
    public function __construct(string $nom, string $prenom, string $dateNaissance, string $sexe, string $role)
    {
        parent::__construct($nom, $prenom, $dateNaissance, $sexe);
    }

}
