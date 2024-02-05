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

    public function addCastings(Casting $casting)
    {
        $this->castings[] = $casting;
    }

    /* DISPLAY */

    public function afficherRoles()
    {
        $result = "<h4>Films  dans lesquels $this à joué :</h4>";
        $result .= "<ul>";
        foreach ($this->castings as $casting) {
            $result .= "<li>" . $casting->afficherActeurs() . "</li>";
        }
        $result .= "</ul>";
        echo $result;
    }


}
