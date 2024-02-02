<?php

class Film
{
    private string $titre;
    private DateTime $sortieFR;
    private int $duree;
    private Realisateur $realisateur;

    public function __construct(string $titre, string $sortieFR, int $duree, Realisateur $realisateur)
    {
        $this->titre = $titre;
        $this->sortieFR = new DateTime($sortieFR);
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->realisateur->addFilms($this);
    }

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

    public function getDate()
    {
        $result = $this->sortieFR->format("d-m-Y");
        return $result;
    }

    public function __toString()
    {
        return "$this->titre | $this->duree minutes | " . $this->getDate() . " (France)<br>";
    }

}