<?php

require __DIR__ . "/vendor/autoload.php";

    // $user0 = new App\Classes\User();
    // $user1 = new App\Classes\User();
    // $user2 = new App\Classes\User();

    // $chien0 = new App\Classes\Chien();
    // $chien1 = new App\Classes\Chien();
    // $chien2 = new App\Classes\Chien();

    // $chien0->setNom("Milou");
    // echo $chien0->getNom();

use App\Classes\Chien;
use App\Classes\User;
use App\Classes\SousClasses\User as SousClassesUser;


    $user0 = new User();
    $chien0 = new Chien();
    $sousClassesUser = new SousClassesUser;

    $user0->setFirstName("jc");
    echo $user0->getFirstName();

    echo "<br/>";
    
    $chien0->setNom("Milou");
    echo $chien0->getNom();

    echo "<br/>";

    echo $sousClassesUser->getFirstName();
