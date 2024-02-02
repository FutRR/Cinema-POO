<?php

class Acteur extends Personne
{
    private Role $role;
    private array $films;
    public function __construct(string $nom, string $prenom, string $dateNaissance, string $sexe, Role $role)
    {
        parent::__construct($nom, $prenom, $dateNaissance, $sexe);
        $this->role = $role;
        $this->films = [];
    }

    /* GETTERS & SETTERS */

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    public function getFilms()
    {
        return $this->films;
    }

    public function setFilms($films)
    {
        $this->films = $films;

        return $this;
    }

    public function addFilms(Film $film)
    {
        $this->films[] = $film;
    }

    /* DISPLAY */

    public function getInfos()
    {
        $result = "Films  dans lesquels " . parent::__toString() . " à joué :<br>";
        foreach ($this->films as $film) {
            $result .= " $film";
        }
        $result .= "<br>";
        return $result;
    }


}
