<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method ="post" action ="<?php $_PHP_SELF ?>">

             <!-- <label>Unesite 1 niz (4 elementa):</label><br>
            <input type = "text" name ="niz1"><br>
            <label>Unesite 2 niz (4 elementa):</label><br>

            <input type = "text" name ="niz2"><br> -->

            <!-- <label>Unesite rijec na engleskom jeziku:</label><br>
            <input type = "text" name ="engRijec"><br> -->

            <!-- <label>Unesite broj:</label><br>
            <input type = "number" name ="broj"><br> -->

<!--
               <label>Unesite  niz :</label><br>
            <input type = "text" name ="niz"><br>

           <input type="submit" name="registracija" value="Submit" > -->

           <!-- <label>Unesite osobe:</label><br>
            <textarea name ="osobe" rows="5" cols="40"> </textarea><br> -->

            <!-- <label for="broj1">Unesite minimalnu vrijednost</label><br>
            <input type ="text" name="minBroj" required><br>
            <label for="broj1">Unesite maximalnu vrijednost</label><br>
            <input type ="text" name="maxBroj" required><br> -->
<!-- 
             <label>Unesite 1 niz :</label><br>
            <input type = "text" name ="niz1"><br>
            <label>Unesite 2 niz :</label><br>

            <input type = "text" name ="niz2"><br> -->
            <!-- <label>Unesite 1 niz :</label><br>
            <input type = "text" name ="niz1"><br> -->

               <label>Unesite rijec :</label><br>
            <input type = "text" name ="rijec1"><br>
            <label>Unesite rijec2 :</label><br>
            <input type = "text" name ="rijec2"><br>
            <input type="submit" name="registracija" value="Submit" >

        </table>
      </form>
   <?php

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_POST['registracija'])) {
        // $niz = $_POST['niz'];
        // $nizkopija = [];
        // $nizkopija = explode(",", $niz);
        // $umnozak = 1;

        // for ($i = count($nizkopija) - 1; $i >= 0; $i--) {
        //    $umnozak = $umnozak * $nizkopija[$i];
        // }

        // echo $niz;
        // echo "<br> Umnozak je " .$umnozak;
        // $osobeInput = $_POST['osobe'];

        // $lines = explode("\n", $osobeInput);
        // $osobe = [];
        // for ($i = 0; $i < count($lines); $i++) {
        //     $line = trim($lines[$i]);
        //     if ($line) {
        //         list($ime, $grad, $god) = array_map('trim', explode(",", $line));
        //         $osobe[] = [
        //             'ime' => $ime,
        //             'grad' => $grad,
        //             'god' => (int)$god
        //         ];
        //     }
        // }
        // usort($osobe, function($a, $b) {
        //     return $a['god'] - $b['god'];
        // });
        // foreach ($osobe as $osoba) {
        //     echo "<p>{$osoba['ime']} ({$osoba['grad']}, {$osoba['god']} godina)</p>";
        // }

    // if(isset($_POST['registracija'])){
    //     $minBroj = test_input($_POST["minBroj"]);
    //     $maxBroj = test_input($_POST["maxBroj"]);
    //     $randomBr = rand($minBroj, $maxBroj);
    //     echo "Nasumicno generiran broj izmedu " .$minBroj. " i " .$maxBroj. " je " .$randomBr;
    // }

//         $niz1 = $_POST['niz1'];
//         $niz2 = $_POST['niz2'];

//         $zbrojniz = [];
//         $umnozakniz =[];
//         $kvocijentniz = [];
//         $razlikaniz = [];

//         $nizkopija1=[];
//         $nizkopija2 = [];
//  v
//         $nizkopija2 = explode(",", $niz2);
//                 foreach ($nizkopija2 as &$value) {
//                     $value = (float) trim($value);
//                 }
//         $nizkopija1 = explode(",", $niz1);
//             foreach ($nizkopija1 as &$value) {
//                 $value = (float) trim($value);
//             }

//         $zbrojbrojeva = 0;
//         $umnozak = 1;
//         $kvocijent = 1;
//         $razlika = 0;
//         for($i = 0; $i < 4; $i++){
//             $zbrojbrojeva = $nizkopija1[$i] + $nizkopija2[$i];
//             $umnozak = $nizkopija1[$i] * $nizkopija2[$i];
//             $razlika = $nizkopija1[$i] - $nizkopija2[$i];
//             $kvocijent = $nizkopija1[$i] / $nizkopija2[$i];

//             array_push($zbrojniz, $zbrojbrojeva);
//             array_push($umnozakniz, $umnozak);
//             array_push($kvocijentniz, $kvocijent);
//             array_push($razlikaniz, $razlika);

//         }

//         echo "<br> Zbroj : ";
//          print_r($zbrojniz);
//         echo "<br> Umnozak:";

//          print_r($umnozakniz);
//         echo "<br> Kvocijent:";

//          print_r($kvocijentniz);
//         echo "<br> Razlika:";
//          print_r($razlikaniz);

        //  $niz = $_POST['niz1'];
        // $nizkopija = [];
        // $nizkopija = explode(",", $niz);
        // $zbroj = 0;
        // $filename = "Rezultat.txt";

        // for ($i = count($nizkopija) - 1; $i >= 0; $i--) {
        //    $zbroj = $zbroj + $nizkopija[$i];
        // }

        // echo $niz;
      
        // file_put_contents($filename, "Zbroj brojeva je " .$zbroj);
        // $fileContents = file_get_contents($filename);
        // echo "<pre>".$fileContents."</pre>";

        // $niz = $_POST['niz1'];
        // $nizkopija = [];
        // $nizkopija = explode(",", $niz);
        
        // $filename = "Rezultat.txt";
        // $noviniz = [];

        // for ($i = 0; $i < count($nizkopija); $i++) {
        //    if($nizkopija[$i] % 3 == 0){
        //         array_push($noviniz, $nizkopija[$i]);
        //    }
        // }

        // print_r($noviniz);
      
        // file_put_contents($filename, $noviniz);
        // $fileContents = file_get_contents($filename);
        // echo "<pre>".$fileContents."</pre>";
        
        $rijec1 = $_POST['rijec1'];
        $rijec2 = $_POST['rijec2'];

        $nizrijec1 = [];
        $nizrijec1 = explode(" ", $rijec1);
        $nizrijec2 = [];

        $nizrijec2 = explode(" ", $rijec2);

        $filename = "Rezultat.txt";
        sort($nizrijec1);
        sort($nizrijec2);
        if($nizrijec1 == $nizrijec2){
            file_put_contents($filename, "Rijeci ".$rijec1. " i " .$rijec2.  " su anagrami ");
        $fileContents = file_get_contents($filename);
        echo "<pre>".$fileContents."</pre>";
        }

        
        

    }

   ?>
</body>
</html>