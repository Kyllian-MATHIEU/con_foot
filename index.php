<?php
include_once "vendor/autoload.php";

use App\class\Humain;
$giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
echo $giroud->getNom()."\n";
echo $giroud->getPrenom()."\n";
echo $giroud->getDateNaissance()->format("d/m/Y")."\n";
echo $giroud->donneTexte()."\n";

use App\class\Selectionneur;
$Deschamps = new Selectionneur("Deschamps", "Didier", new DateTime("1968-10-15"));
echo $Deschamps->getNom()."\n";
echo $Deschamps->getPrenom()."\n";
echo $Deschamps->getDateNaissance()->format("d/m/Y")."\n";
echo $Deschamps->donneTexte()."\n";

use App\class\Joueur;
$mbappe = new Joueur("Mbappe", "Kylian", new DateTime("1998-12-20"), "10");
echo $mbappe->getNom()."\n";
echo $mbappe->getPrenom()."\n";
echo $mbappe->getDateNaissance()->format("d/m/Y")."\n";
echo $mbappe->getNumMaillot()."\n";
echo $mbappe->donneTexte()."\n";


use App\class\Stade;
$stade = new Stade( "PalaisDesSport");
echo $stade->getNom()."\n";