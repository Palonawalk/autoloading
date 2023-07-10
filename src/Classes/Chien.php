<?php
namespace App\Classes;

    class Chien
    {
        private string $nom;
        private string $race;

        public function getNom() : string
        {
            return $this->nom;
        }

        public function setNom(string $nom) : void
        {
            $this->nom = $nom;
        }

        public function getRace() : string
        {
            return $this->race;
        }

        public function setRace(string $race) : void
        {
            $this->race = $race;
        }
    }