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

    public function addCastings(Acteur $acteur)
    {
        $this->castings[] = $acteur;
    }

    public function afficherActeurs()
    {
        $result = "Acteurs ayant joué le role de $this->nom :<br>";
        foreach ($this->castings as $acteur) {
            $result .= "- $acteur<br>";
        }
        return $result;
    }
}