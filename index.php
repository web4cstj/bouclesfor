<?php
/**********************************************************************************
 ____  ____  ___    ____  _____  __  __  ___  __    ____  ___    ____  _____  ____ 
(  _ \( ___)/ __)  (  _ \(  _  )(  )(  )/ __)(  )  ( ___)/ __)  ( ___)(  _  )(  _ \
 )(_) ))__) \__ \   ) _ < )(_)(  )(__)(( (__  )(__  )__) \__ \   )__)  )(_)(  )   /
(____/(____)(___/  (____/(_____)(______)\___)(____)(____)(___/  (__)  (_____)(_)\_)
===================================================================================
Suivre les indications dans la page
Chaque affichage doit se faire :
  - soit avec des echos successifs
  - soit avec des concaténations successives
  - soit avec une fonction
Dans ce solutionnaire, nous vous offrons les 3 pour chaque affichage. La "vraie" 
solution est celle qui n'est pas en commentaire.
***********************************************************************************/
?><!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<title>Des boucles for</title>
</head>

<body>
<?php
echo '<h1>Multiplication verticale</h1>';
/********************************************************************************
- Rendre dynamique le tableau suivant en utilisant une boucle for
- La page DOIT être valide au W3C
- Utiliser la méthode des "echo" successifs
********************************************************************************/
/* SOLUTION */
// Avec des echos successifs
$mult = 12;
echo '<table border="1">';
echo '<tr><th>&times;</th><th>'.$mult.'</th></tr>';
for ($x=1; $x<=12; $x++){
	echo '<tr><th>'.$x.'</th><td>'.($x*$mult).'</td></tr>';
}
echo '</table>';

// Avec des concaténations successives
/*
$mult = 12;
$affichage = '<table border="1">';
$affichage .= '<tr><th>&times;</th><th>'.$mult.'</th></tr>';
for ($x=1; $x<=12; $x++){
	$affichage .= '<tr><th>'.$x.'</th><td>'.($x*$mult).'</td></tr>';
}
$affichage .= '</table>';
echo $affichage;
*/

// À l'aide d'une fonction
/*
function table1($mult) {
  $affichage = '<table border="1">';
  $affichage .= '<tr><th>&times;</th><th>'.$mult.'</th></tr>';
  for ($x=1; $x<=12; $x++){
    $affichage .= '<tr><th>'.$x.'</th><td>'.($x*$mult).'</td></tr>';
  }
  $affichage .= '</table>';
  return $affichage;
}
echo table1(12);
*/
/* /SOLUTION */

echo '<h1>Une autre table de multiplication</h1>';

/********************************************************************************
- Rendre dynamique le tableau suivant en utilisant des boucles for
- La page DOIT être valide au W3C
- Utiliser la méthode des concaténations successives dans une variable 
  avec affichage à la fin
- Note: Il n'y a pas de boucles imbriquées
********************************************************************************/
/* SOLUTION */
// Avec des echos successifs
/*$mult = 8;
echo '<table border="1">';
echo '<tr><th>&times;</th>';
for ($x=1; $x<=12; $x++){
	echo '<th>'.$x.'</th>';
}
echo '</tr><tr><th>'.$mult.'</th>';
for ($x=1; $x<=12; $x++){
	echo '<td>'.($x*$mult).'</td>';
}
echo '</tr>';
echo '</table>';
*/

// Avec des concaténations successives
$mult = 8;
$affichage = '<table border="1">';
$affichage .= '<tr><th>&times;</th>';
for ($x=1; $x<=12; $x++){
	$affichage .= '<th>'.$x.'</th>';
}
$affichage .= '</tr><tr><th>'.$mult.'</th>';
for ($x=1; $x<=12; $x++){
	$affichage .= '<td>'.($x*$mult).'</td>';
}
$affichage .= '</tr>';
$affichage .= '</table>';
echo $affichage;

// À l'aide d'une fonction 
/*
function table2($mult) {
  $affichage = '<table border="1">';
  $affichage .= '<tr><th>&times;</th>';
  for ($x=1; $x<=12; $x++){
    $affichage .= '<th>'.$x.'</th>';
  }
  $affichage .= '</tr><tr><th>'.$mult.'</th>';
  for ($x=1; $x<=12; $x++){
    $affichage .= '<td>'.($x*$mult).'</td>';
  }
  $affichage .= '</tr>';
  $affichage .= '</table>';
  return $affichage;
}
echo table2(8);
*/
/* /SOLUTION */

echo '<h1>Table de multiplications</h1>';

/********************************************************************************
- Rendre dynamique le tableau suivant en utilisant des boucles for imbriquées
- La page DOIT être valide au W3C
- Utilisez une fonction qui retourne le code 
  avec affichage de la valeur de retour
********************************************************************************/
/* SOLUTION */
// Avec des echos successifs
/*
echo '<table border="1">';
echo '<tr><th>&times;</th>';
for ($x=1; $x<=12; $x++){
	echo '<th>'.$x.'</th>';
}
echo '</tr>';
for ($x=1; $x<=12; $x++){
	echo '<tr><th>'.$x.'</th>';
	for ($mult=1; $mult<=12; $mult++){
		echo '<td>'.($x*$mult).'</td>';
	}
	echo '</tr>';
}
echo '</table>';
*/

// Avec des concaténations successives
/*
$affichage = '<table border="1">';
$affichage .= '<tr><th>&times;</th>';
for ($x=1; $x<=12; $x++){
	$affichage .= '<th>'.$x.'</th>';
}
$affichage .= '</tr>';
for ($x=1; $x<=12; $x++){
	$affichage .= '<tr><th>'.$x.'</th>';
	for ($mult=1; $mult<=12; $mult++){
		$affichage .= '<td>'.($x*$mult).'</td>';
	}
	$affichage .= '</tr>';
}
$affichage .= '</table>';
echo $affichage;
*/

// À l'aide d'une fonction 
function tables2d() {
    $affichage = '<table border="1">';
    $affichage .= '<tr><th>&times;</th>';
    for ($x=1; $x<=12; $x++){
        $affichage .= '<th>'.$x.'</th>';
    }
    $affichage .= '</tr>';
    for ($x=1; $x<=12; $x++){
        $affichage .= '<tr><th>'.$x.'</th>';
        for ($mult=1; $mult<=12; $mult++){
            $affichage .= '<td>'.($x*$mult).'</td>';
        }
        $affichage .= '</tr>';
    }
    $affichage .= '</table>';
    return $affichage;
}
echo tables2d();
/* /SOLUTION */

echo '<h1>La somme des nombres</h1>';

/********************************************************************************
- Rendre dynamique le tableau suivant en utilisant une boucle for
- La page DOIT être valide au W3C
- Utilisez la méthode que vous voulez
********************************************************************************/
/* SOLUTION */
// Avec des echos successifs
/*
$total = 0;
echo '<table border="1">';
echo '<tr><th>&sum;</th><th>&nbsp;</th></tr>';
for ($x=1; $x<=12; $x++){
	$total += $x;
	echo '<tr><th>'.$x.'</th><td>'.$total.'</td></tr>';
}
echo '</table>';
*/

// Avec des concaténations successives
/*
$total = 0;
$affichage = '<table border="1">';
$affichage .= '<tr><th>&sum;</th><th>&nbsp;</th></tr>';
for ($x=1; $x<=12; $x++){
	$total += $x;
	$affichage .= '<tr><th>'.$x.'</th><td>'.$total.'</td></tr>';
}
$affichage .= '</table>';
echo $affichage;
*/

// À l'aide d'une fonction 
function sommeDeNombres() {
    $total = 0;
    $affichage = '<table border="1">';
    $affichage .= '<tr><th>&sum;</th><th>&nbsp;</th></tr>';
    for ($x=1; $x<=12; $x++){
        $total += $x;
        $affichage .= '<tr><th>'.$x.'</th><td>'.$total.'</td></tr>';
    }
    $affichage .= '</table>';
    return $affichage;
}
echo sommeDeNombres();

// Une méthode statique dans une classe
class Boucle {
    function sommeDeNombres() {
        $total = 0;
        $affichage = '<table border="1">';
        $affichage .= '<tr><th>&sum;</th><th>&nbsp;</th></tr>';
        for ($x=1; $x<=12; $x++){
            $total += $x;
            $affichage .= '<tr><th>'.$x.'</th><td>'.$total.'</td></tr>';
        }
        $affichage .= '</table>';
        return $affichage;
    }
}
echo sommeDeNombres();
/* /SOLUTION */
?>
</body>
</html>