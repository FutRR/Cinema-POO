<?php

class Film
{
    private string $titre;
    private DateTime $sortieFR;
    private int $duree;
    private string $synopsis;

    public function __construct(string $titre, string $sortieFR, int $duree, string $synopsis)
    {
        $this->titre = $titre;
        $this->sortieFR = new DateTime($sortieFR);
        $this->duree = $duree;
        $this->synopsis = $synopsis;
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

}