<?php
/*
EXERCICE 4 : Affecter respectivement les valeurs 150, 350 et 10 aux variables prix_table, prix_armoire et Nombre.
Calculer le prix HT total pour les 10 armoires.
Comparer le prix de l’armoire et de la table et afficher quel est le prix le plus élevé.

Objectifs : Utilisation de l’instruction IF.

*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <TITLE>EX4 : utilisation de l'instruction IF</TITLE>
</HEAD>
<H1> Utilisation de l'instructeur IF</H1> <BODY>

<?php
//déclaration des variables
$d_prix_armoire; $d_prix_table; $n_nombre;$d_tot_ht_armoire; $d_tot_ht_table; $d_seuil; 


$d_prix_armoire = 500.00; $d_prix_table = 150.00; $n_nombre= 10;
$d_seuil = 2000.00;

$d_tot_ht_armoire = $d_prix_armoire * $n_nombre;

// test sur le prix total des armoires

If ($d_tot_ht_armoire > $d_seuil)
{
    echo "<BR> <H4>Le prix total pour les $n_nombre armoires est de $d_tot_ht_armoire </H4> <BR>"; }
    
//comparaison entre le prix de l'armoire et de la table 
If ($d_prix_armoire > $d_prix_table)
    {
    echo "le prix de l'armoire ($d_prix_armoire) est supérieur au prix de la table ($d_prix_table)";
    } else
    {
    if ($d_prix_armoire == $d_prix_table) {
    echo "le prix de l'armoire ($d_prix_armoire) est égal au prix de la table ($d_prix_table)";
    } else
    {
    echo "le prix de l'armoire ($d_prix_armoire) est inférieur au prix de la table ($d_prix_table)";
    } }
    ?> </BODY> </HTML>
    

