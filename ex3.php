<?php
/*
EXERCICE 3 : Créer une balise de titre H1 : « Calcul sur les variables ».
Affecter respectivement les valeurs 0.206, 150 et 10 aux variables TVA, prix et Nombre. 
Calculer le prix HT et le prix TTC pour les 10 articles et les afficher.
Afficher également le type de chaque variable.

Objectifs : Calcul sur des variables. Gestion des types de données.
*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <TITLE>EX3 :Calcul sur des variables</TITLE>
    </HEAD> 

<BODY>

<?php
$d_prix = 150; $d_tva = 0.206; $n_nombre = 10; $d_tot_ht; $d_tot_ttc; //déclaration des variables

$d_tot_ht = $d_prix * $n_nombre; $d_tot_ttc = $d_tot_ht * (1+$d_tva);

Echo "le montant HT est égal à $d_tot_ht et est de type " . gettype($d_tot_ht); Echo "<BR>";
Echo "le montant TTC est égal à $d_tot_ttc et est de type " . gettype($d_tot_ttc); Echo "<BR>";
Echo "la variable $d_prix est de type " . gettype($d_prix);
Echo "<BR>";
Echo "la variable $d_tva est de type " . gettype($d_tva); Echo "<BR>";
Echo "la variable $n_nombre est de type " . gettype($n_nombre);
 ?>

</BODY> 
</HTML>

