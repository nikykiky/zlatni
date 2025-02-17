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


               <label>Unesite  niz :</label><br>
            <input type = "text" name ="zhshwkhss"><br>
<h2>PROMJENAAAAAAAAAAAAAAAAAAAAA</h2>
           <input type="submit" name="registracija" value="Submit" >
           <!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
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
        // $niz1 = $_POST['niz1'];
        // $niz2 = $_POST['niz2'];

        // $zbrojniz = [];

        // $nizkopija1=[];
        // $nizkopija2 = [];
        // $nizkopija2 = explode(",", $niz2);
        //         foreach ($nizkopija2 as &$value) {
        //             $value = (float) trim($value); 
        //         }
        // $nizkopija1 = explode(",", $niz1);
        //     foreach ($nizkopija1 as &$value) {
        //         $value = (float) trim($value); 
        //     }
        // $zbrojbrojeva = 0;
        // for($i = 0; $i < 4; $i++){
        //     $zbrojbrojeva = $nizkopija1[$i] + $nizkopija2[$i];
        //     array_push($zbrojniz, $zbrojbrojeva);
            
        // }
    
        // echo "Zbroj brojeva: ";
        // echo implode(", ", $zbrojniz);


       
        
        for ($i = count($nizkopija) - 1; $i >= 0; $i--) {  
            $nizkopijaObrnuto[] = $nizkopija[$i];
        }

        echo implode(", ", $nizkopijaObrnuto);

        for($i = 0; $i < 10; $i++){
            echo $i +$i;
            
        }
  }

    for($i = 0; $i < 10; $i++){
        echo "<br><br>";
        echo $i +$i;
        echo $i;
        echo "asfhasfghk";
        echo "asfhasfghk";
    }
    for($i = 0; $i < 10; $i++){
        echo "lalalala" +$i;
        echo "asfhasfghk";
    }
        
   ?>
</body>
</html> 