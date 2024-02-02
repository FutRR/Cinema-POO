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

}