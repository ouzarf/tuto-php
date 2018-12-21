<?php
/*
EXERCICE 5 : Affecter une valeur à la variable nbre et afficher la somme des entiers de 1 à nbre.
Nb : on réalisera cet exercice avec l’instruction FOR puis avec l’instruction WHILE.

Objectifs : Utilisation des instructions WHILE et FOR.


*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <TITLE>EX5-b : utilisation de l'instruction WHILE</TITLE>
</HEAD>
<H1> Utilisation de l'instructeur WHILE</H1> <BODY>

<?php

$n_nbre; $i; $n_somme; //déclaration des variables

$n_nbre = 5; $n_somme = 0; $i=1;

While($i<=$n_nbre) {
$n_somme = $n_somme + $i; $i++;
}

echo "La somme des entiers de 1 à $n_nbre est égale à : $n_somme";




//Retour page précédente.
?><BR>
<INPUT TYPE = button Value = "Retour" onclick = "self.history.back()"> 
 




</BODY> </HTML>

