<?php 
require_once("../sigurnost/sigurnosniKod.php"); 
?>
<!DOCTYPE html>
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
    // Konekcija na bazu
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gogstorg_zavrsni";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Provjerite je li id_ucenika prisutan u URL-u
    if (!isset($_GET['id_ucenika'])) {
        die("ID učenika nije postavljen!");
    }

    $id_ucenika = $_GET['id_ucenika'];
    $id_korisnika = $_SESSION['user_id'];

    // Dohvati podatke o učeniku
    $pdtc_ucenika = mysqli_query($conn,"SELECT * FROM stsl_ucenik WHERE id_uc={$id_ucenika}");
    $dosje_ucenika = mysqli_query($conn, "SELECT stsl_dosje_ucenika.id_do, stsl_dosje_ucenika.opis, DATE_FORMAT(stsl_dosje_ucenika.datum_unosa,' %d.%c.%Y %H:%i') AS dan_upisa, stsl_korisnik.ime AS korisnik FROM stsl_ucenik INNER JOIN stsl_dosje_ucenika ON stsl_ucenik.id_uc = stsl_dosje_ucenika.id_uc INNER JOIN stsl_korisnik ON stsl_korisnik.id_ko = stsl_dosje_ucenika.id_ko WHERE stsl_dosje_ucenika.id_uc={$id_ucenika}");

    // Prikaz podataka o učeniku
    while ($redak = mysqli_fetch_assoc($pdtc_ucenika)) {
        echo "Ucenik: ".$redak['ime']." ".$redak['prezime']."<br />";
        echo "Oib: ".$redak['oib']."<br />";
        echo "Adresa:".$redak['adresa']."<br />";
        echo "Grad:".$redak['grad']."<br />";
    }

    echo "<h1>Bilješka</h1>";
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

        // Gumb za uređivanje bilješke
        echo "<form method='POST' style='display:inline;'>
                <input type='hidden' name='edit_id' value='{$redak['id_do']}'>
                <input type='hidden' name='edit_opis' value='{$redak['opis']}'>
                <input type='hidden' name='edit_datum' value='{$redak['dan_upisa']}'>
                <input type='submit' name='uredi_dosje' value='Uredi'>
              </form>";

        // Gumb za brisanje bilješke
        echo "<form method='POST' style='display:inline;'>
                <input type='hidden' name='delete_id' value='{$redak['id_do']}'>
                <input type='submit' name='obrisi_dosje' value='Obriši'>
              </form>";

        echo "</td></tr>";
    }
    echo "</table>";

    // Obrada uređivanja bilješke
    if (isset($_POST['spremi_izmjene'])) {
        $novi_opis = mysqli_real_escape_string($conn, $_POST['novi_opis']);
        $edit_id = $_POST['edit_id'];

        if (!empty($edit_id)) {
            $query = "UPDATE stsl_dosje_ucenika SET opis = '$novi_opis' WHERE id_do = '$edit_id'";
            if (mysqli_query($conn, $query)) {
                echo "Bilješka uspješno ažurirana!<br /><br />";
                header("Location: " . $_SERVER['PHP_SELF'] . "?id_ucenika=" . $id_ucenika);
                exit;
            } else {
                echo "Greška pri ažuriranju bilješke: " . mysqli_error($conn) . "<br /><br />";
            }
        } else {
            echo "Greška: ID bilješke nije valjan.<br /><br />";
        }
    }

    // Prikaz forme za uređivanje bilješke
    if (isset($_POST['uredi_dosje'])) {
        $edit_id = $_POST['edit_id'];
        $edit_opis = $_POST['edit_opis'];
        $edit_datum = $_POST['edit_datum'];

        echo "<h4>Uredi bilješku</h4>";
        echo "<form method='POST'>
                Opis: 
                <textarea rows='4' cols='50' name='novi_opis'>{$edit_opis}</textarea><br />
                <input type='hidden' name='edit_id' value='{$edit_id}'>
                <input type='submit' name='spremi_izmjene' value='Spremi izmjene'>
              </form>";
    }

    // Obrada brisanja bilješke
    if (isset($_POST['obrisi_dosje'])) {
        $delete_id = $_POST['delete_id'];

        if (!empty($delete_id)) {
            $query = "DELETE FROM stsl_dosje_ucenika WHERE id_do = '$delete_id'";
            if (mysqli_query($conn, $query)) {
                echo "Bilješka uspješno obrisana!<br /><br />";
                header("Location: " . $_SERVER['PHP_SELF'] . "?id_ucenika=" . $id_ucenika);
                exit;
            } else {
                echo "Greška pri brisanju bilješke: " . mysqli_error($conn) . "<br /><br />";
            }
        } else {
            echo "Greška: ID bilješke nije valjan.<br /><br />";
        }
    }
?>

</div>
</body>
</html>