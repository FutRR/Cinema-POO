<?php

class Realisateur extends Personne
{
    private array $films;

    public function __construct(string $nom, string $prenom, string $dateNaissance, string $sexe)
    {
        parent::__construct($nom, $prenom, $dateNaissance, $sexe);
        $this->films = [];
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

    public function getInfos()
    {
        $result = "Films de " . parent::__toString() . " :<br>";
        foreach ($this->films as $film) {
            $result .= " $film <br>";
        }
        $result .= "<br>";
        return $result;
    }

}