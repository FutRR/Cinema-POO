<?php

class Film
{
    private string $titre;
    private DateTime $sortieFR;
    private int $duree;
    private Realisateur $realisateur;
    private Genre $genre;
    private array $castings;



    public function __construct(string $titre, string $sortieFR, int $duree, Realisateur $realisateur, Genre $genre)
    {
        $this->titre = $titre;
        $this->sortieFR = new DateTime($sortieFR);
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->realisateur->addFilms($this);
        $this->genre = $genre;
        $this->genre->addFilms($this);
        $this->castings = [];
    }

    /* GETTERS & SETTERS */


    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getSortieFR(): DateTime
    {
        return $this->sortieFR;
    }

    public function setSortieFR(DateTime $sortieFR)
    {
        $this->sortieFR = $sortieFR;

        return $this;
    }

    public function getDuree(): int
    {
        return $this->duree;
    }

    public function setDuree(int $duree)
    {
        $this->duree = $duree;

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

    public function getDate()
    {
        $result = $this->sortieFR->format("d-m-Y");
        return $result;
    }

    /* DISPLAY */

    public function __toString()
    {
        return "$this->titre | $this->duree minutes | " . $this->getDate() . " (France)<br>";
    }

    public function afficherCasting()
    {
        $result = "Dans le film $this->titre : <br>";
        foreach ($this->castings as $casting) {
            $result .= "-" . $casting->getRole() . " a été joué par " . $casting->getActeur() . "<br>";
        }
        $result .= "<br>";
        return $result;
    }
}