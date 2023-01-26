<?php


namespace App\class;
use DateTime;
use App\Class\Evenement;
use App\Class\Joueur;

class Substitution
{
private Joueur $Entrant;
private Joueur $Sortant;
    public function __construct(DateTime $temps, string $Entrant, string $Sortant)
    {
        $this->Entrant= $Entrant;
        $this->Sortant= $Sortant;

        parent::__construct($temps);



    }


    public function donneTexte(): string
    {
        return "Substitution " . $this->Entrant . " " ."-". $this->Sortant . " a partir de " . $this->temps->format('H:i:s');
    }
}