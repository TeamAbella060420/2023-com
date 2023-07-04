<?php
session_start();
if (!$_SESSION['user_id']) {
    header('Location: index.php');
}

if($_GET['url'] !== '20235899ACC_URI'){
    header('Location: 404.php');
}


require_once('conn.php');

//query one
$sql = "SELECT * FROM url";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$links = $stmt->fetchAll(PDO::FETCH_ASSOC);


