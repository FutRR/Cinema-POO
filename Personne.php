<?php

class Personne
{

    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private string $sexe;

    public function __construct(string $nom, string $prenom, string $dateNaissance, string $sexe)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->sexe = $sexe;
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

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(DateTime $dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getSexe(): string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getAge()
    {
        $now = new DateTime();
        $interval = $this->dateNaissance->diff($now);
        return $interval->format("%Y");
    }

    /* DISPLAY */

    public function __toString()
    {
        return "$this->prenom $this->nom";
    }

}