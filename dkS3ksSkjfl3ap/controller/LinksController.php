<?php
// Enable error reporting and display
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once('../config/conn.php'); // Include your database connection file

$link_value = $_POST['link_value'];
$id = $_POST['data_id'];

// Update existing data
$stmt = $pdo->prepare("UPDATE url SET link = ? WHERE id = ?");
$stmt->execute([$link_value, $id]);
echo "update";



if (isset($_POST['logout_account'])) {
    session_start();
    session_destroy();
    $currentHost = $_SERVER['HTTP_HOST'];
    $landingPage = 'dkS3ksSkjfl3ap';
    $redirectURL = "https://$currentHost/$landingPage";

    header("Location: $redirectURL");
}
