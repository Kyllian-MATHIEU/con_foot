<?php


namespace App\class;
use App\Class\Joueur;
use App\Class\Evenement;
use DateTime;




class Faute
{
    private bool $CartonJaune;
    private bool $CartonRouge;
    private string $Description;

    private Joueur $victime;
    private Joueur $auteur;

    public function __construct(bool $CartonJaune, Bool $CartonRouge, string $Description, \DateTime $temps, string $auteur, String $victime)
    {
        $this-> CartonJaune = $CartonJaune;
        $this-> CartonRouge = $CartonRouge;
        $this-> Description = $Description;

        Parent::__Construct($temps);
        $this->temps = $temps;

        $this-> Auteur = $auteur ;
        $this-> Victime = $victime;

    }

    /** GET X-X-X-X-X */

    public function getTemps(): DateTime
    {
        return $this->temps;
    }

    public function getAuteur(): string
    {
        return $this->Auteur;
    }

    public function getDescription(): string
    {
        return $this->Description;
    }

    public function getVictime(): string
    {
        return $this->Victime;
    }

    public function isCartonJaune(): bool
    {
        return $this->CartonJaune;
    }

    public function isCartonRouge(): bool
    {
        return $this->CartonRouge;
    }

/** SET X-X-X-X-X */

    public function setTemps(DateTime $temps): void
    {
        $this->temps = $temps;
    }

    public function setAuteur(string $Auteur): void
    {
        $this->Auteur = $Auteur;
    }

    public function setCartonJaune(bool $CartonJaune): void
    {
        $this->CartonJaune = $CartonJaune;
    }

    public function setCartonRouge(bool $CartonRouge): void
    {
        $this->CartonRouge = $CartonRouge;
    }

    public function setDescription(string $Description): void
    {
        $this->Description = $Description;
    }

    public function setVictime(string $Victime): void
    {
        $this->Victime = $Victime;
    }

    /** DonneText  */

    public function donneTexte(): string
    {
        return "Le fautif est " . $this->auteur . " La victime est " . $this->victime . " moment de la faute : " . $this->temps->format('H:I:S')."La fautes est". $this->Description;
    }



}