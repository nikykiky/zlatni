<?php
session_start();
require_once("../sigurnost/sigurnosniKod.php");
require_once("../sigurnost/spoj_na_bazu.php");

// Make sure the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "You are not authorized to perform this action.";
    exit();
}

// Get the user ID and the entry ID to delete
$user_id = $_SESSION['user_id'];
$id_unosa_za_brisanje = $_POST['id_unosa_za_brisanje'];

if (!isset($id_unosa_za_brisanje)) {
    echo "You must provide an ID for deletion.";
    exit();
}

// Check if the diary entry exists and belongs to the logged-in user
$query = "SELECT id_ko FROM stsl_dnevnik_rada WHERE id_dr = '$id_unosa_za_brisanje'";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "Error fetching entry: " . mysqli_error($conn);
    exit();
}

$row = mysqli_fetch_assoc($result);

// If the user is the one who created the entry, allow the deletion
if ($row && $row['id_ko'] == $user_id) {
    // Proceed with deletion
    $delete_query = "DELETE FROM stsl_dnevnik_rada WHERE id_dr = '$id_unosa_za_brisanje'";

    if (mysqli_query($conn, $delete_query)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "You are not authorized to delete this record.";
}

mysqli_close($conn);
?>
