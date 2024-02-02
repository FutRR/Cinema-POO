<?php

class Casting
{
    private Acteur $acteur;
    private Role $role;
    private Film $film;

    public function __construct(Acteur $acteur, Role $role, Film $film)
    {
        $this->acteur = $acteur;
        $this->role = $role;
        $this->role->addCastings($this);
        $this->film = $film;
    }

    /* GETTERS & SETTERS */

    public function getActeur(): Acteur
    {
        return $this->acteur;
    }

    public function setActeur(Acteur $acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }

    public function getRole(): Role
    {
        return $this->role;
    }

    public function setRole(Role $role)
    {
        $this->role = $role;

        return $this;
    }

    public function getFilm(): Film
    {
        return $this->film;
    }

    public function setFilm(Film $film)
    {
        $this->film = $film;

        return $this;
    }

    /* DISPLAY */


}