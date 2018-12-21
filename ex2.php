<?php
/*
EXERCICE 2 : Déclarer 2 variables : nom et prénom. Les initialiser avec les valeurs « Betty » et « Iris » et les afficher sur la page en utilisant 3 modes syntaxiques différents :
-	2 commandes echo
-	1 commande echo avec 1 seule chaîne de caractère -	1 commande echo avec le point de concaténation

Objectifs : Déclaration et initialisation de variables. Utilisation du point de concaténation.
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <TITLE>EX2 : utilisation de variables</TITLE>
    </HEAD> 

<BODY>

 <?php
$s_nom; $s_prenom; //déclaration des variables

$s_nom= "Betty" ; $s_prenom = "Iris";

Echo $s_nom; Echo " "; Echo $s_prenom; echo "<BR>";
Echo "$s_nom    $s_prenom"; echo "<BR>";
Echo $s_nom . "      " . $s_prenom; echo "<BR>";
?> 
</BODY> 
</HTML>

