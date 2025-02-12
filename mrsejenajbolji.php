<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortiranje brojeva</title>
</head>
<body>
    <h1>Unesite broj</h1>
    <form method="POST">
        <label for="brojevi">Brojevi: </label>
        <input type="text" name="word" id="brojevi" required>
        <button type="submit" name="submit">Jel ima:</button>
    </form>
 
    <?php
    if(isset($_POST["submit"])){
        $word = $_POST["word"];
        if ($word % 2 == 0){
            echo "Broj $word je paran";
        }
        else{
           echo"neparan je";
        }
        
       
    }
    ?>
</body>
</html>