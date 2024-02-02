<?php

class Genre
{
    private string $nom;
    private array $films;


    public function __construct(string $nom)
    {
        $this->nom = $nom;
        $this->films = [];

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
        $result = "Films de $this->nom :<br>";
        foreach ($this->films as $film) {
            $result .= " $film";
        }
        $result .= "<br>";
        return $result;
    }

}