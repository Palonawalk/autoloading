<?php
namespace App\Classes\SousClasses;

    class User
    {
        private string $firstName = "Prénom de l'utilisateur de la sous classe";

        public function getFirstName() : string
        {
            return $this->firstName;
        }
    }