<?php require_once("../sigurnost/sigurnosniKod.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Administracija ucenika</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
<link href="../admin_css.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<style>
select#id_razreda{
    width: 90px;
    padding: 10px 15px;
    font-size: 16px;
    font-weight: bold;
    color: #333;
    border: 1px solid #007bff;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    cursor: pointer;
    transition: all 0.3s ease;
}

.redak {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}

.pola {
    flex: 1; /* Svaki div zauzima pola širine */
    margin-right: 10px; /* Prostor između dvaju divova */
}

.pola > input{
	width: 100%;
}
form {
    display: flex;
    flex-direction: column;
}
#forma_select{
	display: block
}
label {
    margin: 10px 0 5px;
    font-weight: bold;
    color: #555;
}

input[type="text"],
input[type="number"],
input[type="date"] {
    padding: 8px;
    margin-bottom: 1px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="radio"] {
    margin-right: 5px;
}

.spol-options {
    display: flex;
    justify-content: start;
}

.form-actions {
    display: flex;
    justify-content: space-between;
}

button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #45a049;
}

button[type="button"] {
    background-color: #f44336;
}

button[type="button"]:hover {
    background-color: #e53935;
}

input[type="text"]:focus,
input[type="number"]:focus,
input[type="date"]:focus {
    border-color: #4CAF50;
    outline: none;
}
</style>

</head>
<body>
<div class="sve">
<?php require_once("../izbornik.php"); ?>

<div class="redak">
<div class="pola">
    <h3>Pretraži učenika po razredu: </h3>
    <?php
        //include("../sigurnost/spoj_na_bazu.php");
        /*
        $servername = "localhost";
        $username = "gogstorg_profesorica";
        $password = "U9Tqu$;%i4a7";
        $dbname = "gogstorg_zavrsni";
        */
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gogstorg_zavrsni";
        $conn = new mysqli($servername, $username, $password, $dbname);

<<<<<<< HEAD
        // Dohvat posljednje školske godine
        $sk_godina_query = "SELECT id_skgod, sk_godina FROM stsl_sk_godina ORDER BY id_skgod DESC LIMIT 1";
        $sk_godina_result = mysqli_query($conn, $sk_godina_query);
        $sk_godina_data = mysqli_fetch_assoc($sk_godina_result);  // Dohvaćanje jednog reda podataka
        $id_skgod = $sk_godina_data['id_skgod'];
        $sk_godina = $sk_godina_data['sk_godina'];

        $razredi_upit = "SELECT id_raz, oznaka_raz FROM stsl_razred";
        $razredi = mysqli_query($conn,$razredi_upit);
        echo "
        <div class='custom-select'>
        <form action='".$_SERVER['PHP_SELF']."' method='POST' id='forma_select'>
            <select name='razred' onchange='this.form.submit()'>
            <option value='--'>--</option>";
            while($raz = mysqli_fetch_array($razredi))
            {
                echo "<option value='".$raz['oznaka_raz']."'>".$raz['oznaka_raz']."</option>";
            }
            echo "</select>
        </form>
        </div>";

        // Ispisivanje učenika prema razredu
        if(isset($_POST['razred']) && $_POST['razred'] != '--') {
            $razred = $_POST['razred'];
            $upit_učenici = "SELECT * FROM stsl_učenici WHERE razred = '$razred' AND id_skgod = '$id_skgod'";
            $rezultat_učenici = mysqli_query($conn, $upit_učenici);

            if(mysqli_num_rows($rezultat_učenici) > 0) {
                echo "<h4>Učenici u razredu $razred:</h4>";
                while($učenik = mysqli_fetch_assoc($rezultat_učenici)) {
                    echo "<p>".$učenik['ime']." ".$učenik['prezime']."</p>";
                }
            } else {
                echo "<p>Nema učenika u odabranom razredu.</p>";
            }
        }
    ?>
</div>
=======
			$razredi_upit = "SELECT id_raz, oznaka_raz FROM stsl_razred";
			$razredi = mysqli_query($conn,$razredi_upit);
			echo "
			<div class='custom-select'>
			<form action='".$_SERVER['PHP_SELF']."' method='POST' id='forma_select'>
				<select name='razred' onchange='this.form.submit()'>
				<option value='--'>--</option>";
				while($raz = mysqli_fetch_array($razredi))
				{
					echo "<option value='".$raz['oznaka_raz']."'>".$raz['oznaka_raz']."</option>";
				}
				echo "</select>
				
			</form>
			</div>";
>>>>>>> 1153b52738deb5a3d0872fb12f4d7d949ce073c3


	<div class="pola">
		<h3>Pretraži učenika po imenu ili prezimenu: </h3>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<input type="text" name="pretrazi_ucenika" /><br />
			<input type="submit" name="sbmt_pretrazi_ucenika" value="Pretraži" />
		</form>
	</div>

	<div class="pola">
		<h3>Dodaj učenika: </h3>
		<input type="submit" name="sbmt_dodaj_ucenika" id="dodaj_ucu_btn" onclick="" style="background-color: #ac72cf" value="Dodaj učenika" />
	</div>
</div>


<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['razred'])) {
		$rezultat = mysqli_query($conn,"
		SELECT *
		FROM stsl_ucenik_razred
		INNER JOIN stsl_ucenik ON stsl_ucenik_razred.id_uc = stsl_ucenik.id_uc 
		INNER JOIN stsl_razred ON stsl_ucenik_razred.id_ra = stsl_razred.id_raz 
		WHERE stsl_razred.oznaka_raz = '$_POST[razred]'
		order by oznaka_raz desc;");
    
		echo "<table border='1'>
			<thead>
			<tr valign='top'>
			<td><b>Ime</b></td>
			<td><b>Prezime</b></td>
			<td><b>Razred</b></td>
			<td><b>Pregled</b></td>
			</tr>
			</thead>";
		
		while($redak = mysqli_fetch_array($rezultat))
		{
		  $id = $redak['id_uc'];
		  echo "<tr valign='top'><td>";
		  echo $redak['ime'];
		  echo "</td><td>";
		  echo $redak['prezime'];
		  echo "</td><td>";
		  echo $redak['oznaka_raz'];
		  echo "</td><td>";
		  echo "<a href='pregled_ucenika.php?id_ucenika=$id'>Pregled</a>";
		  echo "</td></tr>";
		  }
		echo "</table>";
	}
?>




<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sbmt_pretrazi_ucenika'])) {
		$unos_za_pretragu = mysqli_real_escape_string($conn, $_POST['pretrazi_ucenika']);
		$pdtc_pretraga_po_uceniku = mysqli_query($conn, "
			SELECT * FROM stsl_ucenik_razred
			INNER JOIN stsl_ucenik ON stsl_ucenik_razred.id_uc = stsl_ucenik.id_uc 
			INNER JOIN stsl_razred ON stsl_ucenik_razred.id_ra = stsl_razred.id_raz
			INNER JOIN stsl_sk_godina ON stsl_ucenik_razred.id_skgod = stsl_sk_godina.id_skgod
			WHERE ime LIKE '%$unos_za_pretragu%' or prezime LIKE '%$unos_za_pretragu%'
		");
		
		echo "<table id='tbl_dosje_ucenika' border='1'>
			<thead>
				<tr valign='top'>
				<td width='15%'><b>Razred</b></td>
				<td width='15%'><b>Ime</b></td>
				<td width='15%'><b>Prezime</b></td>
				<td width='15%'><b>Oib</b></td>
				<td width='15%'><b>Adresa</b></td>
				<td width='15%'><b>Pregled</b></td>
				</tr>
			</thead>";
		while ($redak = mysqli_fetch_assoc($pdtc_pretraga_po_uceniku)) {
			$id = $redak['id_uc'];
			$sk_godina = $redak['sk_godina'];
			echo "<tr valign='top''><td>";
			echo $redak['oznaka_raz'];
			echo "</td><td>";
			echo $redak['ime'];
			echo "</td><td>";
			echo $redak['prezime'];
			echo "</td><td>";
			echo $redak['oib'];
			echo "</td><td>";
			echo $redak['adresa'];
			echo "</td><td>";
			echo "<a href='pregled_ucenika.php?id_ucenika=$id'>Pregled</a>";
			echo "</td></tr>";
		}
		echo "</table>";
	}

    ?>
</div>


<div id="dialog_dodaj" title="Dodaj učenika" style="display: none;">
    <form action="" method="POST">      
        <label for="ime_ucenika">Ime:</label>    
        <input type="text" name="ime_ucenika" id="ime_ucenika"/>

        <label for="prezime_ucenika">Prezime:</label>
        <input type="text" name="prezime_ucenika" id="prezime_ucenika"/>
    
		<div class="redak">
			<div class="pola">
				<label for="id_sk_god">Id sk. godine:</label>
				<input type="text" name="id_sk_god" id="id_sk_god" value="<?=$id_skgod?>" style="width:100px" disabled/>
			</div>
			<div class="pola">
				<label for="id_razreda">Razred:</label><br />
				<select name="id_razreda" id="id_razreda">
					<option value='--'>--</option>
					<?php
					//include("../sigurnost/spoj_na_bazu.php");
					/*
					$servername = "localhost";
					$username = "gogstorg_profesorica";
					$password = "U9Tqu$;%i4a7";
					$dbname = "gogstorg_zavrsni";
					*/
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "gogstorg_zavrsni";
					$conn = new mysqli($servername, $username, $password, $dbname);
					
					$razredi_upit = "SELECT id_raz, oznaka_raz FROM stsl_razred";
					$razredi = mysqli_query($conn,$razredi_upit);
					var_dump($razredi);
					while($raz = mysqli_fetch_array($razredi))
					{
						echo "<option value='".$raz['id_raz']."'>".$raz['oznaka_raz']."</option>";
					}
					mysqli_close($conn);
					?>
				</select>
			</div>
		</div>

        <label>Spol:</label>
        <div class="spol-options">
            <label>
                <input type="radio" name="spol_ucenika" value="musko"> Muško
            </label>
            <label>
                <input type="radio" name="spol_ucenika" value="zensko"> Žensko
            </label>
        </div>

        <label for="oib_ucenika">OIB:</label>
        <input type="number" name="oib_ucenika" id="oib_ucenika"/>

        <label for="datum_rodenja">Datum rođenja:</label>
        <input type="date" name="datum_rodenja" id="datum_rodenja"/>

        <label for="adresa_ucenika">Adresa:</label>
        <input type="text" name="adresa_ucenika" id="adresa_ucenika"/>

        <label for="grad_ucenika">Grad:</label>
        <input type="text" name="grad_ucenika" id="grad_ucenika"/>

		<div class="redak">
			<div class="pola">
				<label for="ime_oca">Ime oca:</label>
				<input type="text" name="ime_oca" id="ime_oca"/>
			</div>
			<div class="pola">
				<label for="mob_oca">Mob oca:</label>
				<input type="text" name="mob_oca" id="mob_oca"/>
			</div>
		</div>

		<div class="redak">
			<div class="pola">
				<label for="ime_majke">Ime majke:</label>
        		<input type="text" name="ime_majke" id="ime_majke"/>
			</div>
			<div class="pola">
				<label for="mob_majke">Mob majke:</label>
        		<input type="text" name="mob_majke" id="mob_majke"/>
			</div>
		</div>
		
		<label for="rjesenje_ucenika" style="display:none">Rješenje:</label>
        <input type="text" name="rjesenje_ucenika" id="rjesenje_ucenika"  style="display:none"/>

        <label for="klasa_ucenika"  style="display:none">Klasa:</label>
        <input type="text" name="klasa_ucenika" id="klasa_ucenika"  style="display:none"/>
		

    </form>
</div>


	<script>
		document.addEventListener('DOMContentLoaded', function() {
			// DOM je spreman
			console.log("DOM je spreman")
			document.querySelector('[name="sbmt_dodaj_ucenika"]').onclick = dodaj_ucu;
		});

		function dodaj_ucu() {
			console.log("weegfb")
			$('#dialog_dodaj').dialog('open');

		}



		$("#dialog_dodaj").dialog({
    autoOpen: false,
    height: "auto",
    width: 450,
    modal: true,
    resizable: true,
    show: {
        effect: "fade",
        duration: 300
    },
    hide: {
        effect: "fade",
        duration: 300
    },
    buttons: {
        "Unesi": function() {
            ime_ucenika = $('input[name="ime_ucenika"]').val();
            prezime_ucenika = $('input[name="prezime_ucenika"]').val(); 
            oib_ucenika = $('input[name="oib_ucenika"]').val(); 
            datum_rodenja = $('input[name="datum_rodenja"]').val(); 
            adresa_ucenika = $('input[name="adresa_ucenika"]').val(); 
            grad_ucenika = $('input[name="grad_ucenika"]').val(); 
            spol_ucenika = $("input[name='spol_ucenika']:checked").val();
            rjesenje_ucenika = $('input[name="rjesenje_ucenika"]').val(); 
            klasa_ucenika = $('input[name="klasa_ucenika"]').val(); 
            ime_oca = $('input[name="ime_oca"]').val();  
            mob_oca = $('input[name="mob_oca"]').val(); 
            ime_majke = $('input[name="ime_majke"]').val(); 
            mob_majke = $('input[name="mob_majke"]').val(); 
            id_razreda = $('select[name="id_razreda"]').val(); 
            id_sk_god = $('input[name="id_sk_god"]').val(); 
            
            $.ajax({
                type: "POST",
                url: "dodaj_ucenika.php",
                data: {"ime_ucenika" : ime_ucenika, "prezime_ucenika" : prezime_ucenika, "oib_ucenika":oib_ucenika,"datum_rodenja":datum_rodenja,"adresa_ucenika":adresa_ucenika,"grad_ucenika":grad_ucenika,"spol_ucenika":spol_ucenika,"rjesenje_ucenika":rjesenje_ucenika,"klasa_ucenika":klasa_ucenika,"ime_oca":ime_oca,"mob_oca":mob_oca,"ime_majke":ime_majke,"mob_majke":mob_majke,"id_razreda":id_razreda,"id_sk_god":id_sk_god},
                success: function (rez) {
                    console.log("uneseno");
                    showNotification("Učenik/ca " + ime_ucenika + " " + prezime_ucenika + " je uspješno dodan/a!", true);
                }
            });
            $(this).dialog("close");
        },
        "Odustani": function() {
            $(this).dialog("close");
        }
    }
});

function showNotification(message, isSuccess) {

    if ($("#notification").length === 0) {
        $("body").append('<div id="notification"></div>');
        
     
        $("<style>")
            .text(`
                #notification {
                    position: fixed;
                    top: 20px;
                    left: 50%;
                    transform: translateX(-50%);
                    background-color: #fff0f5;
                    border: 2px solid #ff85a2;
                    border-radius: 15px;
                    padding: 15px 25px;
                    box-shadow: 0 4px 20px rgba(255, 105, 180, 0.3);
                    z-index: 10000;
                    text-align: center;
                    font-size: 16px;
                    color: #db3a7a;
                    max-width: 80%;
                    opacity: 0;
                    display: flex;
                    align-items: center;
                    font-weight: bold;
                }
                
                #notification.success {
                    background-color: #f0fff4;
                    border-color: #68d391;
                    color: #2f855a;
                }
                
                #notification:before {
                    content: "🎀";
                    margin-right: 10px;
                    font-size: 24px;
                }
                
                #notification.success:before {
                    content: "🎉";
                }
            `)
            .appendTo("head");
    }
    
  
    const $notification = $("#notification")
        .html(message)
        .removeClass("success");
    
    if (isSuccess) {
        $notification.addClass("success");
    }
    
   
    $notification.css({
        "opacity": 0,
        "top": "-100px"
    }).show()
    .animate({
        "opacity": 1,
        "top": "20px"
    }, {
        duration: 600,
        easing: "easeOutBounce"
    })
    .delay(2000)
    .animate({
        "opacity": 0,
        "top": "-100px"
    }, {
        duration: 400,
        complete: function() {
            $(this).hide();
        }
    });
}
	</script>
</div>
</body>
</html>