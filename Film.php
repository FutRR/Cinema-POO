<?php

class Film
{
    private string $titre;
    private DateTime $sortieFR;
    private int $duree;
    private string $synopsis;
    private Realisateur $realisateur;

    public function __construct(string $titre, string $sortieFR, int $duree, string $synopsis, Realisateur $realisateur)
    {
        $this->titre = $titre;
        $this->sortieFR = new DateTime($sortieFR);
        $this->duree = $duree;
        $this->synopsis = $synopsis;
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

    public function getSynopsis(): string
    {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    public function getDate()
    {
        $result = $this->sortieFR->format("d-m-Y");
        return $result;
    }

    public function __toString()
    {
        return "$this->titre | $this->duree, sorti le " . $this->getDate() . " en France<br>";
    }

}