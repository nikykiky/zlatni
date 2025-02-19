<?php
// $string = "Ovo je string u PHP programskom jeziku.";
// $pozicija = strpos($string, "PHP");
// if ($pozicija != false) {
//     $string = strtoupper($string);
//     echo "$string";
//  } else {
//     $nasumicni_broj = rand(1, 100);
//     echo "rendom br: $nasumicni_broj";
//  }


// $recenica = "Ovaj dan je loš, ali može biti bolji.";
// $nova_recenica = str_replace("loš", "dobar", $recenica);
// echo $nova_recenica . "<br>";
// $broj1 = -15.15;
// $broj2 = 8;
// $razlika = abs($broj1 - $broj2);
// $zaokruzena_razlika = round($razlika);
// echo "Apsolutna zaokružena razlika: " . $zaokruzena_razlika;



$proizvodi = [
    ['naziv' => 'Laptop', 'cijena' => 4500],
    ['naziv' => 'Mobitel', 'cijena' => 1200],
    ['naziv' => 'Tablet', 'cijena' => 700],
    ['naziv' => 'Monitor', 'cijena' => 900],
 ];
 $ukupna_cijena = 0;
 foreach ($proizvodi as $proizvod) {
    $ukupna_cijena += $proizvod['cijena'];
 }
 $pdv = 0.25 * $ukupna_cijena;
 $ukupna_cijena_s_pdv = $ukupna_cijena + $pdv;

 echo "Ukupna cijena bez PDV-a: " . round($ukupna_cijena, 2) . " HRK\n <br/>";
 echo "Ukupna cijena s PDV-om: " . round($ukupna_cijena_s_pdv, 2) . " HRK\n <br/>";
 
 $ukupna_cijena = 0;
 foreach ($proizvodi as $proizvod) {
    $cijena_s_pdv = $proizvod['cijena'] * 1.25;
    echo "Naziv proizvoda: " . $proizvod['naziv'] . " | Cijena s PDV-om: " . round($cijena_s_pdv, 2) . " HRK\n <br/>";

    $pozicija_proizvod = strpos($proizvod['naziv'], "Proizvod");
    if ($pozicija_proizvod !== false) {
        echo "Pozicija riječi 'Proizvod' u nazivu: " . $pozicija_proizvod . "\n <br/>";
    }
    if (strlen($proizvod['naziv']) < 5) {
        echo "Naziv u velikim slovima: " . strtoupper($proizvod['naziv']) . "\n <br/>";
    }
    $ukupna_cijena += $proizvod['cijena'];
 }
 if ($ukupna_cijena > 5000) {
    $ukupna_cijena_s_popustom = ceil($ukupna_cijena * 1.25);
    echo "Popust dodijeljen, ukupna cijena s PDV-om: " . $ukupna_cijena_s_popustom . " HRK (zaokruženo)\n <br/>";
 } else {
    $ukupna_cijena_s_popustom = round($ukupna_cijena * 1.25, 2);
    echo "Ukupna cijena s PDV-om: " . $ukupna_cijena_s_popustom . " HRK\n <br/>";
 }
 $ukupna_cijena_s_pdv = $ukupna_cijena * 1.25;
 $razlika_pdv = $ukupna_cijena_s_pdv - $ukupna_cijena;
 echo "Ukupna cijena bez PDV-a: " . round($ukupna_cijena, 2) . " HRK\n <br/>";
 echo "Razlika između cijene bez PDV-a i s PDV-om: " . round($razlika_pdv, 2) . " HRK\n <br/>";

?>  
