<?php
//1
// $proizvodi = [
//     ['naziv' => 'Ruksak', 'cijena' => 1000],
//     ['naziv' => 'Hlace', 'cijena' => 120],
//     ['naziv' => 'Majica', 'cijena' => 1200],
//     ['naziv' => 'Tenisice', 'cijena' => 2000],
//     ['naziv' => 'Bicikl', 'cijena' => 3200],
//     ['naziv' => 'Računalo', 'cijena' => 8900],
// ];


// $cijene = array_column($proizvodi, 'cijena');
// $ukupna_cijena = array_sum($cijene);
// $pdv = $ukupna_cijena / 4;
// $spdv= $ukupna_cijena + $pdv;
// echo " a) Ukupna cijena svih proizvoda s pdv-om je: " . $spdv;
// echo "<br/>";

// if ($ukupna_cijena > 15000) {
//     $ukupna_cijena = round($ukupna_cijena,2);
//     echo " d) Ukupna cijena svih proizvoda je: " . $ukupna_cijena;
// }
// echo "<br/>";
// $razlika = $spdv - $ukupna_cijena ;
// echo " e) Ukupna razlika svih proizvoda je: " . $razlika;

// foreach ($proizvodi as &$proizvod) {
//     if (strlen($proizvod['naziv']) < 7) {
//         $proizvod['naziv'] = strtoupper($proizvod['naziv']);
//     }
// }

// echo "c) "($proizvod);

//2
//  $niz = [2,-3,5,8,-1,13,6,-9,7,12,-4];
// sumaNeparnih($niz);
// razlikaParnih($niz);
// produktProstih($niz);
// sumaNeparnih2($niz);
// function sumaNeparnih($un){
//     $zb = 0;
//     for ($i=0; $i < count($un); $i++) {
//         if ($un[$i] % 2 != 0) {
//             $zb += $un[$i];
//         }
//     }
//     echo $zb;
//     echo "<br>";
// }
// function razlikaParnih($un){
//     $min = $un[0];
//     $max = $un[0];
//     for ($i=0; $i < count($un); $i++) {
//         if ($un[$i] % 2 == 0 && $un[$i] > $max) {
//             $max = $un[$i];
//         }
//         elseif($un[$i] % 2 == 0 && $un[$i] < $min){
//             $min = $un[$i];
//         }
//     }
//     $razlikica = $max - $min;
//     echo "razlika je ". $razlikica;
//     echo "<br>";
    
// }
// function produktProstih($un){
//     $rez = 1;
//     for ($i=0; $i < count($un); $i++) {
//         $prost = TRUE;
//         $br = $un[$i];
//         if ($br > 0) {
//             for ($j=2; $j < $br; $j++) {
//                 if ($br % $j == 0) {
//                     $prost = FALSE;
//                 }
//             }
//             if ($prost) {
//                 $rez = $rez * $br;
//             }
//         }
//     }
//     echo $rez;
//     echo "<br>";
// }
// function sumaNeparnih2($un){
//     $poz = 0;
//     $neg = 0;
//     for ($i=0; $i < count($un); $i++) {
//         if ($un[$i] > 0) {
//             $poz += $un[$i];
//         }
//         else{
//             $neg += abs($un[$i]);
//         }
//     }
//     if ($neg == 0) {
//         echo "Djeljenje s nulom nije moguće";
//     }
//     else{
//         echo $poz / $neg;
//     }
// }
 


// //3
// $trg1 = ['Router','HDMI_kabel','Tipkovnica','Zvučnici'];
// $trg2 = ['Pisač','Monitor','Tipkovnica','Miš'];
// $rez = array_merge($trg1, $trg2);
// $rez = array_unique($rez);
// echo "a) <br>";
// for ($i=0; $i < count($rez); $i++) {
//     echo $rez[$i];
//     echo "<br>";
// }
// $ch = 'ne';
// for ($i=0; $i < count($rez); $i++) {
//     if($rez[$i] == 'HDMI_kabel'){
//         $ch = '';
//     }
// }
// echo "b) Proizvod HDMI kabel se ". $ch . " nalazi u košarici.";
// $rez = sort($rez);

?>
