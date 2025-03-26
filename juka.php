<?php
$string = "ovo je string u php program jeziku";
$juka = strpos($string,"php");
if ($juka !== false){
    echo strtoupper($string);
}
else{
    echo rand(1,100);
}
echo "<br/>";
$recenica = "ovaj dan je los, ali moze biti bolji";
echo str_replace("los","dobar",$recenica);
echo "<br/>";
$broj1 = -15.2;
$broj2 = 8;
$c = abs($broj1) - abs($broj2);
echo round($c);
echo "<br/>";
$proizvodi = [
    ['naziv' => 'laptop', 'cijena' => 4500],
    ['naziv' => 'mobitel', 'cijena' => 1200],
    ['naziv' => 'tablet', 'cijena' => 700],
    ['naziv' => 'monitor', 'cijena' => 900]
];
$zbrojpdv = 0;
$zbrojbez = 0;
foreach($proizvodi as $proizvod){
    $nazivproizvoda=$proizvod['naziv'];
    echo $nazivproizvoda;
    echo "<br/>";
    $cijenapdv = $proizvod['cijena'] + $proizvod['cijena'] * 0.25;
    $cijenabez = $proizvod['cijena'];
    echo $cijenapdv;
    echo "<br/>";
    echo $cijenabez;
    echo "<br/>";
    $zbrojpdv += $cijenapdv;
    $zbrojbez += $cijenabez;
};
echo $zbrojpdv;
echo "<br/>";
echo $zbrojbez;
echo "ko je najjaci lik";

for ($i=0; $i < 5; $i++) { 
    $i--;
}

?>