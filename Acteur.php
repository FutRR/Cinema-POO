<?php

class Acteur extends Personne
{
    private array $castings;
    public function __construct(string $nom, string $prenom, string $dateNaissance, string $sexe)
    {
        parent::__construct($nom, $prenom, $dateNaissance, $sexe);
        $this->castings = [];
    }

    public function getCastings()
    {
        return $this->castings;
    }

    public function setCastings($castings)
    {
        $this->castings = $castings;

        return $this;
    }

    public function addCastings(Film $film)
    {
        $this->castings[] = $film;
    }

    /* DISPLAY */

    public function afficherRoles()
    {
        $result = "Films  dans lesquels " . parent::__toString() . " à joué :<br>";
        foreach ($this->castings as $film) {
            $result .= " $film";
        }
        $result .= "<br>";
        return $result;
    }


}
