<?php
// Include the database connection
require_once('conn.php');

// Check if the admin table is empty
$stmt = $pdo->prepare('SELECT COUNT(*) as count FROM admin');
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result['count'] == 0) {
    // If the admin table is empty, insert a default admin user
    $admin_username = 'xyzU599qtiopT';
    $admin_password = password_hash('bA5qyiHb})(.KU', PASSWORD_DEFAULT);

    $stmt = $pdo->prepare('INSERT INTO admin (username, password) VALUES (:username, :password)');
    $stmt->execute(['username' => $admin_username, 'password' => $admin_password]);
} else {
    // If the admin table is not empty, update the password for the admin user
    $new_password = 'bA5qyiHb})(.KU';
    $admin_password = password_hash($new_password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare('UPDATE admin SET password = :password WHERE username = :username');
    $stmt->execute(['password' => $admin_password, 'username' => 'xyzU599qtiopT']);
}
