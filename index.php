<?php
require "kint.php";
function chargerClasse($classe)
{
    require $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
}

spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

$c = new Champ("Louis", new Classe("Boulet"),5);
echo $c->resume();
Kint::dump($c);