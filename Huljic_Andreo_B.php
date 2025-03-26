<?php
//ZADATAK 1
$proizvodi = [
    ['naziv' => 'Ruksak', 'cijena' => 1000],
    ['naziv' => 'Hlace', 'cijena' => 120],
    ['naziv' => 'Majica', 'cijena' => 1200],
    ['naziv' => 'Tenesice', 'cijena' => 2000],
    ['naziv' => 'Bicikl', 'cijena' => 3200],
    ['naziv' => 'Racunalo', 'cijena' => 8900],

];

/** ovo je moja main grana */
/* ovo je grana profa*/

$zbrojpdv = 0;
$zbrojbez = 0;
foreach($proizvodi as $proizvod){
    $nazivproizvoda=$proizvod['naziv'];
    echo $nazivproizvoda;
    echo "<br>";
    $cijenapdv = $proizvod['cijena'] + $proizvod['cijena'] * 0.25;
    $cijenabez = $proizvod['cijena'];
    echo "Cijena sa PDV-om " . $cijenapdv;
    echo "<br>";
    echo "Cijena bez PDV-a " . $cijenabez;
    echo "<br>";
    $zbrojpdv += $cijenapdv;
    $zbrojbez += $cijenabez;
    if(strlen($nazivproizvoda)<7){
        echo "<br>";
        echo strtoupper($nazivproizvoda);
    }
    /* stashat cemo*/
    /** nova  */

};
echo "Ukupna cijena svih proizvoda sa PDV-om je : " . $zbrojpdv;
echo "<br>";
echo "Zaokruzena ukupna cijena svih proizvoda bez PDV-a je : " .$zbrojbez;
echo "<br>";
echo "Razlika bez PDV-a i sa PDV-om je: " . $zbrojpdv - $zbrojbez ;
echo "<br>";
echo "<br>";
echo "<br>";
//ZADATAK2
$niz = [2,-3,5,8,-1,13,6,-9,7,12,-4];
function sumaNeparnih($niz){
    $zbroj = 0;
    foreach($niz as $anja){
        if($anja % 2 != 0){
           $zbroj += $anja; 
        }
    }
    return ($zbroj);
}
$rezultat = sumaNeparnih($niz);
echo "Suma neparnih brojeva: " . $rezultat;
echo "<br>";
$parniniz = [];
function razlikaParnih($niz){
    
    foreach($niz as $broj){
        if($broj % 2 == 0){
            $parniniz[] = $broj;
        }
    }
    $najmanji = min($parniniz);
    $najveci = max($parniniz);
    $razlika1 = $najveci - $najmanji;
    return($razlika1);
    
}
$razlika1 = razlikaParnih($niz);
echo "Razlika najveceg i najmanjeg parnog broja :" . $razlika1;
echo "<br>";
/*$prost = [];
$umnozak = 1;
function isPrime($broj){
    for($i = 2; $i < $broj; $i++){
        if($broj % $i == 0){
            return(false);
        }
    }
    return(true);
}
function produktProstih($niz){
   foreach($niz as $prost){
    if(isPrime($prost)){
        $umnozak = $umnozak * $prost;
        echo $umnozak;
        echo  "Prost broj: " . $prost;
        
    }
   }
}
echo produktProstih($niz);
echo "<br>";
*/
function kolicnik($niz){
    $pozitivni = 0;
    $negativni = 0;
    foreach($niz as $jea){
        if($jea < 0){
            $negativni += $jea;
        }
        else{
            $pozitivni += $jea;
        }
    }
    $kolicnik = $pozitivni / $negativni;

    return($kolicnik);
}
$rezultatkol = kolicnik($niz);
echo "Količnik zbroja pozitivnih i negativnih:" . round(abs($rezultatkol),2);

echo "<br>";
echo "<br>";
echo "<br>";

$narudzba1 = array('Router','HDMI_kabel','Tipkovnica','Zvučnici');
$narudzba2 = array('Pisač','Monitor','Tipkovnica','Miš');

$struktirano = array_unique($narudzba1+$narudzba2);
print_r($struktirano);
if(in_array("HDMI_kabel",$struktirano)){
    echo "Da";
}else{
    echo "Ne";
}
echo "<br>";
sort($struktirano);

print_r($struktirano);

?>