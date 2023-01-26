<?php


namespace App\class;
use DateTime;
use App\Class\Evenement;
use App\Class\Joueur;


class FaitDejeu
{
    private Joueur $auteur;

    public function __construct(DateTime $temps, string $auteur)
    {
        $this->Auteur = $auteur;
        parent::__construct($temps);

    }

public function GetAuteur(): string
     {
        Return $this->Auteur;
     }






}