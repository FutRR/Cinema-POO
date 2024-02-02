<?php

class Genre
{
    private string $nom;

    public function __construc(string $nom)
    {
        $this->nom = $nom;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }
}