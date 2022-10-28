<?php

namespace Drupal\annuaire\Service;

class Service
{
    private $nom;
    private $numeroCourt;
    private $numeroLong;
    private $numeroCourt2;
    private $numeroLong2;

    public function __construct($nom, $numeroCourt, $numeroLong, $numeroCourt2, $numeroLong2)
    {
        $this->nom = $nom;
        $this->numeroCourt = $numeroCourt;
        $this->numeroLong = $numeroLong;
        $this->numeroCourt2 = $numeroCourt2;
        $this->numeroLong2 = $numeroLong2;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getNumeroCourt()
    {
        return $this->numeroCourt;
    }

    public function setNumeroCourt($numeroCourt)
    {
        $this->numeroCourt = $numeroCourt;
    }

    public function getNumeroLong()
    {
        return $this->numeroLong;
    }

    public function setNumeroLong($numeroLong)
    {
        $this->numeroLong = $numeroLong;
    }

    public function getNumeroCourt2()
    {
        return $this->numeroCourt2;
    }

    public function setNumeroCourt2($numeroCourt)
    {
        $this->numeroCourt2 = $numeroCourt;
    }

    public function getNumeroLong2()
    {
        return $this->numeroLong2;
    }

    public function setNumeroLong2($numeroLong)
    {
        $this->numeroLong2 = $numeroLong;
    }
}