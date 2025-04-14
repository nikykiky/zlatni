<?php require_once("../sigurnost/sigurnosniKod.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pregled učenika</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
    <link rel="stylesheet" type="text/css" href="../admin_css.css" />
</head>
<body>
<div class="sve">
<?php require_once("../izbornik.php"); ?>
<h2>Pregled učenika</h2>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gogstorg_zavrsni";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Greška u spajanju na bazu: " . $conn->connect_error);
}

$id_ucenika = $_GET['id_ucenika'];
$id_korisnika = $_SESSION['user_id'];

// Prikaz učenika
$pdtc_ucenika = mysqli_query($conn, "SELECT * FROM stsl_ucenik WHERE id_uc={$id_ucenika}");
while ($redak = mysqli_fetch_assoc($pdtc_ucenika)) {
    echo "Učenik: " . $redak['ime'] . " " . $redak['prezime'] . "<br />";
    echo "OIB: " . $redak['oib'] . "<br />";
    echo "Adresa: " . $redak['adresa'] . "<br />";
    echo "Grad: " . $redak['grad'] . "<br />";
    echo "<input type='hidden' name='id_uc' value='" . $redak['id_uc'] . "'>";
}

// Obrada uređivanja bilješke
if (isset($_POST['spremi_izmjene'])) {
    $novi_opis = mysqli_real_escape_string($conn, $_POST['novi_opis']);
    $edit_id = $_POST['edit_id'];

    if (!empty($edit_id)) {
        $query = "UPDATE stsl_dosje_ucenika SET opis = '$novi_opis' WHERE id_do = '$edit_id'";
        if (mysqli_query($conn, $query)) {
            header("Location: " . $_SERVER['PHP_SELF'] . "?id_ucenika=" . $id_ucenika);
            exit;
        } else {
            echo "Greška pri ažuriranju bilješke: " . mysqli_error($conn) . "<br /><br />";
        }
    }
}

// Obrada brisanja bilješke
if (isset($_POST['obrisi_dosje'])) {
    $delete_id = $_POST['delete_id'];

    if (!empty($delete_id)) {
        $query = "DELETE FROM stsl_dosje_ucenika WHERE id_do = '$delete_id'";
        if (mysqli_query($conn, $query)) {
            header("Location: " . $_SERVER['PHP_SELF'] . "?id_ucenika=" . $id_ucenika);
            exit;
        } else {
            echo "Greška pri brisanju bilješke: " . mysqli_error($conn) . "<br /><br />";
        }
    }
}

// Prikaz forme za uređivanje (ako je kliknuto "Uredi")
if (isset($_POST['uredi_dosje'])) {
    $edit_id = $_POST['edit_id'];
    $edit_opis = $_POST['edit_opis'];

    echo "<h4>Uredi bilješku</h4>";
    echo "<form method='POST'>
            Opis:<br />
            <textarea rows='4' cols='50' name='novi_opis'>{$edit_opis}</textarea><br />
            <input type='hidden' name='edit_id' value='{$edit_id}'>
            <input type='submit' name='spremi_izmjene' value='Spremi izmjene'>
          </form><br />";
}

// Prikaz bilješki
echo "<h1>Bilješke</h1>";
$dosje_ucenika = mysqli_query($conn, "SELECT stsl_dosje_ucenika.id_do, stsl_dosje_ucenika.opis, DATE_FORMAT(stsl_dosje_ucenika.datum_unosa,' %d.%m.%Y %H:%i') AS dan_upisa, stsl_korisnik.ime AS korisnik 
    FROM stsl_ucenik 
    INNER JOIN stsl_dosje_ucenika ON stsl_ucenik.id_uc = stsl_dosje_ucenika.id_uc 
    INNER JOIN stsl_korisnik ON stsl_korisnik.id_ko = stsl_dosje_ucenika.id_ko 
    WHERE stsl_dosje_ucenika.id_uc = {$id_ucenika}");

echo "<table id='tbl_dosje_ucenika' border='1'>
    <thead>
        <tr valign='top'>
            <td width='60%'><b>Opis</b></td>
            <td width='10%'><b>Upisao</b></td>
            <td width='10%'><b>Datum</b></td>
            <td width='20%'><b>Akcije</b></td>
        </tr>
    </thead>";

while ($redak = mysqli_fetch_assoc($dosje_ucenika)) {
    echo "<tr valign='top'><td>";
    echo $redak['opis'];
    echo "</td><td>";
    echo $redak['korisnik'];
    echo "</td><td>";
    echo $redak['dan_upisa'];
    echo "</td><td>";

    // uredi
    echo "<form method='POST' style='display:inline; margin-right:5px;'>
            <input type='hidden' name='edit_id' value='{$redak['id_do']}'>
            <input type='hidden' name='edit_opis' value=\"" . htmlspecialchars($redak['opis'], ENT_QUOTES) . "\">
            <input type='submit' name='uredi_dosje' value='Uredi'>
          </form>";

    // obriši
    echo "<form method='POST' style='display:inline;' onsubmit=\"return confirm('Jesi siguran da želiš obrisati ovu bilješku?');\">
            <input type='hidden' name='delete_id' value='{$redak['id_do']}'>
            <input type='submit' name='obrisi_dosje' value='Obriši'>
          </form>";

    echo "</td></tr>";
}
echo "</table>";
?>

<h4>Dodaj bilješku</h4>
<form action="" method="POST">
    Opis:<br />
    <textarea rows="4" cols="50" name="dosje_opis"></textarea><br />
    Datum unosa: <input type="date" name="datum_unosa_dosjea" value="<?php echo date('Y-m-d'); ?>" /><br />
    <input type="submit" name="dodaj_dosje" value="Dodaj dosje"/>
</form>

<?php
// Dodavanje bilješke
if (isset($_POST['dodaj_dosje'])) {
    $dosje_opis = mysqli_real_escape_string($conn, $_POST['dosje_opis']);
    $datum_unosa_dosjea = mysqli_real_escape_string($conn, $_POST['datum_unosa_dosjea']);

    $query = "INSERT INTO stsl_dosje_ucenika (id_uc, id_ko, opis, datum_unosa) VALUES ('$id_ucenika', '$id_korisnika', '$dosje_opis', '$datum_unosa_dosjea')";
    if (mysqli_query($conn, $query)) {
        header("Location: " . $_SERVER['PHP_SELF'] . "?id_ucenika=" . $id_ucenika);
        exit;
    } else {
        echo "Greška prilikom unosa bilješke: " . mysqli_error($conn);
    }
}

$conn->close();
?>
</div>
</body>
</html>
