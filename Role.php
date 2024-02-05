<?php

class Role
{
    private string $nom;
    private array $castings;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
        $this->castings = [];
    }

    /* GETTERS & SETTERS */

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
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

    public function afficherActeurs()
    {
        $result = "<h4>Acteurs ayant joué le role de $this->nom :</h4>";
        $result .= "<ul>";
        foreach ($this->castings as $casting) {
            $result .= "<li>" . $casting->afficherActeurs() . "</li>";
        }
        $result .= "</ul>";
        echo $result;
    }

    public function __toString()
    {
        return "$this->nom";
    }
}