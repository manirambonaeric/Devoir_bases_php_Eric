<?php
// les variables
$t=2;
$p=4;
function somme($t,$p)
{
    $a=$t;
    $b=$p;
    $r=$t+$p;
    echo $r;
}

// Pour les booleens 

echo 'Donner le dividende de ton choix:','<br></br>';

echo $b;
$bmod2==0;

$c =$bmod2;

if ( $c=true) {
   
    echo 'le dividende est un nombre paire','<br></br>';
}
else
if ( $c=false) {

    echo 'le dividende n\' est pas un nombre paire', '<br></br>';
}

$a;


// la condition if.... else
$a=10;

if($a<=5)
{
    echo 'Les multiples de a sont :' , $a;
}
else
{
    echo 'Le chiffre tape est un chiffre premier' , '<br></br>';
}

//la condition switch...case
$n=5;
switch($n)
{
    case 1:
    echo ' Le nombre tape est un nombre premier';
    break;
    case 2:
    echo 'Le nombre tape est un nombre paire';
    break;
    case 3:
    echo 'Le nombre tape est un nombre premier';
    break;
    case 4:
    echo 'Le nombre tape est un nombre paire';
    break;
    case 5:
    echo 'Le nombre tape est un nombre premier' .'<br></br>';
    break;
    
    default: 
    echo 'Ce nombre n\'appartient pas parmi les cinq premiers nombres entiers naturels' .'<br>';

}
'<br></br>';


// Pour la boucle for
$t=10; 

for($i=1;$i<=10;$i++) 
if($t==$i)
{
    echo 'Voici les '.$t.' eleves qui sont parmi les eleves les plus intelligents de la classe ' , '<br></br>';

    $t++;
}


// le boucle while
$m =0; 
while($m<=9)
{
    echo 'Voila  ' . $m  .' est le chiffre qui est compris parmi les neufs premiers nombres entiers <br>';

    $m++ ;
}

// Boucle do while
$k=10;
do{
    echo 'Voici le premier nombre entier naturel qui a quatre diviseurs' .'<br></br>';
    
    $k++;
}

while($k<10);

//Tableau
$tab = array(
    'Produit' => 'Fanta',
    'categorie' => 'froid',
    'contenance' => '32cl'


);
echo  'je suis le '  .$tab ['Produit'];
echo  ' qui est '  .$tab ['categorie'];
echo  ' et je contiens '  .$tab ['contenance'];


?>