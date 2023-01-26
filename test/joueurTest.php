<?php

use App\class\Joueur;
use PHPUnit\Framework\TestCase;

class joueurTest extends TestCase
{
    public function testDonneTexte(): void
        // On crée une méthode qui teste la méthode donneTexte()
    {
        $mbappe = new Joueur("Mbappe", "Kylian", new DateTime("1998-12-20"), "10"); // On crée un objet Humain
        // On teste la méthode donneTexte() de l'objet Humain
        // Faire une assertion = affirmer que quelque chose est vrai
        $this->assertEquals("Joueur Mbappe Kylian date de naissance 20/12/1998 Maillot 10", $mbappe->donneTexte());
    }

    public function testGetNom(): void
    {
        $mbappe = new Joueur("Mbappe", "Kylian", new DateTime("1998-12-20"), "10");
        $this->assertEquals("Mbappe", $mbappe->getNom());
    }

    public function testGetPrenom(): void
    {
        $mbappe = new Joueur("Mbappe", "Kylian", new DateTime("1998-12-20"), "10");
        $this->assertEquals("Kylian", $mbappe->getPrenom());
    }

    public function testGetDateNaissance(): void
    {
        $mbappe = new Joueur("Mbappe", "Kylian", new DateTime("1998-12-20"), "10");
        $this->assertEquals("1998-12-20", $mbappe->getDateNaissance()->format("Y-m-d"));
    }

    public function testGetNumMaillot(): void
    {
        $mbappe = new Joueur("Mbappe", "Kylian", new DateTime("1998-12-20"), "10");
        $this->assertEquals("10", $mbappe->getNumMaillot());
    }


    public function testSetNom(): void
    {
        $mbappe = new Joueur("Mbappe", "Kylian", new DateTime("1998-12-20"), "10");
        $mbappe->setNom("Mbappe2");
        $this->assertEquals("Mbappe2", $mbappe->getNom());
    }

    public function testSetPrenom(): void
    {
        $mbappe = new Joueur("Mbappe", "Kylian", new DateTime("1998-12-20"), "10");
        $mbappe->setPrenom("Kylian2");
        $this->assertEquals("Kylian2", $mbappe->getPrenom());
    }

    public function testSetDateNaissance(): void
    {
        $mbappe = new Joueur("Mbappe", "Kylian", new DateTime("1998-12-20"), "10");
        $mbappe->setDateNaissance(new DateTime("1998-12-20"));
        $this->assertEquals("1998-12-20", $mbappe->getDateNaissance()->format("Y-m-d"));
    }

    public function testSetNumMaillot(): void
    {
        $mbappe = new Joueur("Mbappe", "Kylian", new DateTime("1998-12-20"), "10");
        $mbappe->setNumMaillot("10");
        $this->assertEquals("10", $mbappe->getNumMaillot());
    }


    public function testAll(): void
    {
        $mbappe = new Joueur("Mbappe", "Kylian", new DateTime("1998-12-20"), "10");
        $mbappe->setNom("Mbappe2");
        $this->assertEquals("Mbappe2", $mbappe->getNom());
        $mbappe->setPrenom("Kylian2");
        $this->assertEquals("Kylian2", $mbappe->getPrenom());
        $mbappe->setDateNaissance(new DateTime("1998-12-20"));
        $this->assertEquals("1998-12-20", $mbappe->getDateNaissance()->format("Y-m-d"));
        $mbappe->setNumMaillot("10");
        $this->assertEquals("10", $mbappe->getNumMaillot());
        $this->assertEquals("Joueur Mbappe2 Kylian2 date de naissance 20/12/1998 Maillot 10", $mbappe->donneTexte());
    }
}
