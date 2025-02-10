<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unos brojeva</title>
</head>
<body>
    <form method="post" action="">
        <label for="num">Unesite broj:</label>
        <input type="number" name="num" id="num" required><br><br>
        <input type="submit" value="Unesi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['num'];
        
        $file = fopen("vjezba43.txt", "a");

        if ($num != 0) {
            fwrite($file, $num . PHP_EOL);
            echo "<p>Broj $num je upisan u datoteku.</p>";
        } else {
            fclose($file);
            
            $fileContent = file("vjezba43.txt", FILE_IGNORE_NEW_LINES);
            $sum = array_sum($fileContent);
            
            echo "<p>Zbroj svih unesenih brojeva je: $sum.</p>";
            
            if ($sum % 2 == 0) {
                echo "<p>Zbroj brojeva je paran.</p>";
            } else {
                echo "<p>Zbroj brojeva je neparan.</p>";
            }
            file_put_contents("vjezba43.txt", "");
        }
    }
    ?>
</body>
</html>
