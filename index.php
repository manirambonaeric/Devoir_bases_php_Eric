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
/*
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
*/
/*
//la condition switch...case
$jour=2;
switch($jour) // on indique sur quelle variable on travaille
{
    case 1: //dans le cas ou $jour vaut 1
    echo ' LUNDI c\'est un jour de la semaine';
    break;
    case 2: //dans le cas ou $jour vaut 2
    echo 'MARDI c\'est un jour de la semaine';
    break;
    case 3: //dans le cas ou $jour vaut 3
    echo 'MERCREDI c\'est un jour de la semaine';
    break;
    case 4: //dans le cas ou $jour vaut 4
    echo 'JEUDI c\'est un jour de la semaine';
    break;
    case 5: //dans le cas ou $jour vaut 5
    echo 'VENDREDI c\'est un jour de la semaine';
    break;
    case 6: //dans le cas ou $jour vaut 6
    echo 'SAMEDI c\'est un jour de la semaine';
    break;
    case 7:  //dans le cas ou $jour vaut 7
    echo 'DIMANCHE c\'est un jour de la semaine';
    break;
    default: // dans le cas ou $jour n'appartient pas dans la semaine
    echo 'Desole, ce n\'est pas un jour de la semaine';

}
*/
/*
//le boucle for
$numero; //declaration de variable
     //1        //2         //3
for($numero=1;$numero<=10;$numero++) //1: sert a initialiser 2:la condition 3:incrementation
{
    echo 'ceci est le numero ' . $numero . '</br>';
}
*/
/*
// le boucle while
$numero =1; //declaration de variable et initialisation
while($numero<=20)
{
    echo 'ceci est le numero' . $numero . '</br>';
    $numero++;
}
*/
/*
//le boucle do while
$i=0;// declaration et initialisation du compteur
//boucle generant la boucle de multiplication de 10
do{
    echo '10*'. $i . '=' .(10*$i) .'</br>';
    //incrementation du compteur
    $i++;
}

while($i<=10); // la condition
*/
//les tableaux :
/*//1.tableau numerote
$prenom[0]='Olivier';
$prenom[1]='Pericles';
$prenom[2]='Christ';
echo $prenom[0] ."</br>";
echo $prenom[1] ."</br>";
echo $prenom[2] ."</br>";
*/
//2.tableau associatif
$caracteristiques = array(
    'Prenom' => 'Olivier',
    'Commune' => 'Buganda',
    'Province' => 'Cibitoke',
    'Zone' => 'Gasenyi'
);
echo  'Mon prenom est :' .$caracteristiques ['Prenom'];
echo  'De la Commune :' .$caracteristiques ['Commune'];
echo 'Province :'.$caracteristiques ['Province'];
echo 'Zone :' .$caracteristiques ['Zone'];
/*
//la fonction qui calcule la surface du rectangle
$longueur=5;
$largeur=4;
function surfacerectangle($longueur,$largeur)// declaration de la fonction
{
    $surface=$longueur*$largeur; //utilisation de la fonction
    return $surface;
}
    $surface = surfacerectangle(5,4); //appel de la fonction
    echo 'la surface de longueur de 5 et largeur de 4 est:' .$surface;
*/














?>