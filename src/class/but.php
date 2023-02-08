<?php

namespace App\class;

use DateTime;


class but extends FaitDeJeu
{
 private bool $SurPenalty;

 public function __construct(DateTime $temps, Joueur $auteur,bool $SurPenalty, FaitDeJeu $description)
 {
     parent::__construct($temps, $auteur, $description);
     $this->SurPenalty = $SurPenalty;
 }
    public function SurPenalty(): bool
    {
     return $this->SurPenalty;
    }

    public function getAuteur(): Joueur
    {
        return $this->Auteur;
    }

    public function getDescription(): FaitDeJeu
    {
        return $this->Description;
    }

    public function donneTexte(): string
    {
            $texte = "But : ".$this->getTemps()->format("H:i:s")." : " .$this->getAuteur()->getNom() ." ".$this->getAuteur()->getPrenom()." ".$this->getDescription();
        if ($this->SurPenalty()) {
            $texte .= "But";
        }
        if ($this->SurPenalty() != null) {
            $texte .= " But sur penalty " .$this->getTemps()->format("H:i:s")." : " .$this->getAuteur()->getNom() ." ".$this->getAuteur()->getPrenom()." ".$this->getDescription();
        }
        return $texte."\n";
    }


}