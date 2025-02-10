<?php

echo "<br/>";
echo "Zadatak 1";
echo "<br/>";
$proizvodi = [
    ['naziv' => 'rusak', 'cijena' => 1000],
    ['naziv' => 'hlace', 'cijena' => 120],
    ['naziv' => 'majica', 'cijena' => 1200],
    ['naziv' => 'tenisice', 'cijena' => 2000],
    ['naziv' => 'bicikl', 'cijena' => 3200],
    ['naziv' => 'racunalo', 'cijena' => 8900]
];


$ukupna_cijena = 0;
 foreach ($proizvodi as $proizvod) {
    $ukupna_cijena += $proizvod['cijena'];
 }
 $pdv = 0.25 * $ukupna_cijena;
 $ukupna_cijena_s_pdv = $ukupna_cijena + $pdv;

 echo "a) cijena svih proizvoda s pdv-om je  $ukupna_cijena_s_pdv </br>";


 echo "c)";

$ukupna_cijena2 = 0;
 foreach ($proizvodi as $proizvod) {
    
    if (strlen($proizvod['naziv']) < 7) {
        echo "Naziv : " . strtoupper($proizvod['naziv']) . " Cijena: " . ($proizvod['cijena']) . "\n <br/>";
    }else{
        echo "Naziv: " . $proizvod['naziv'] . " Cijena: ". ($proizvod['cijena']) . "\n <br/>";
    }
    $ukupna_cijena2 += $proizvod['cijena'];
 }

echo "d)";
if ($ukupna_cijena2 > 15000) {
    $ukupna_cijena_s_popustom = round($ukupna_cijena );
    echo "Popust dodijeljen, ukupna zaokruzena cijena bez PDV-a: " . $ukupna_cijena_s_popustom . " \n <br/>";
}

echo "e)";
 $ukupna_cijena_s_pdv = $ukupna_cijena * 1.25;
 $razlika_pdv = $ukupna_cijena_s_pdv - $ukupna_cijena;
 echo "Razlika između cijene bez PDV-a i s PDV-om: " . round($razlika_pdv, 2) . " \n <br/>";



 echo "<br/>";
 echo "Zadatak 2";
 echo "<br/>";


 $niz = [2,-3,5,8,-1,13,6,-9,7,12,-4];

 

function sumaNeparnih($niz) {
    $neparni = 0;
    foreach($niz as $broj){
        if ($broj % 2 != 0) {
            $neparni += $broj;
        }
     };
     return $neparni;
 }

 function razlikaParnih($niz) {
    $min = 100;
    $max = 0;
    $razlika = 0;
    foreach($niz as $broj){
        if ($broj % 2 == 0) {
            if ($broj > $max) {
                $max = $broj;
            }
            if ($broj < $min) {
                $min = $broj;
            }
        }
        $razlika = $max - $min;
     };
     return $razlika;
 }


 
function produktProstih($niz) {
    $produkt = 1;
    foreach($niz as $broj){
        for ($i=2; $i < 12; $i++) { 
            if ($broj % $i != 0) {
                $produkt *= $broj;
            }
        }
       
     };
     return $produkt;
 }


 
 $neparni = sumaNeparnih($niz);
 $razlika = razlikaParnih($niz);
 $produkt = produktProstih($niz);

echo "a) Neparni: $neparni </br>";
echo "b) Razlika: $razlika </br>";
echo "c) Produkt: $produkt </br>";






?>
