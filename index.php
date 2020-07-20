<?php
// les variables
/*$a=2;
$b=4;
function multiplication($a,$b)
{
    $a=$a;
    $b=$b;
    $b=$a*$b;
    echo $b;
}
multiplication(2,4);*/

//les booleens
/*$poids=10; // on teste le booleen en changeant la valeur
if($poids >=15)
{
    $a=true;
    echo 'le poids est valide';
}
else
{
    $a=false;
    echo 'le poids n\' est pa valide';
}
*/
//la condition if.... else
$c=10;
if($c<=10) // on teste selon la valeur
{
    echo 'affiche-moi bonjour';
}
else
{
    echo 'affiche-moi bonsoir';
}
//la condition switch...case
$jour=7;
switch($jour) // on indique sur quelle variable on travaille
{
    case 1:
    echo ' LUNDI c\'est un jour de la semaine';
    break;
    case 2:
    echo 'MARDI c\'est un jour de la semaine';
    break;
    case 3:
    echo 'MERCREDI c\'est un jour de la semaine';
    break;
    case 4:
    echo 'JEUDI c\'est un jour de la semaine';
    break;
    case 5:
    echo 'VENDREDI c\'est un jour de la semaine';
    break;
    case 6:
    echo 'SAMEDI c\'est un jour de la semaine';
    break;
    case 7:
    echo 'SAMEDI c\'est un jour de la semaine';
    break;
    default:
    echo 'Desole, ce n\'est pas un jour de la semaine';

}















?>