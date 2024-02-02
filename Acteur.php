<?php

class Acteur extends Personne
{

    private string $role;

    public function __construct(string $nom, string $prenom, string $dateNaissance, string $sexe, string $role)
    {
        parent::__construct($nom, $prenom, $dateNaissance, $sexe);
        $this->role = $role;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}
