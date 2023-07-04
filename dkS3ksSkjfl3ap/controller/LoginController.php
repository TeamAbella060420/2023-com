<?php
// Start session
session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the email and password from the form
    $username = strip_tags($_POST['username']);
    $password = $_POST['password'];

    if (strlen($username) > 20) {
        $response = array('status' => 'error', 'message' => '用户名不能超过 20 字节');
        echo json_encode($response);
        exit();
    }

    $pattern = "/^[a-zA-Z0-9]+$/";


    // Validate the email and password
    if (!empty($username) && !empty($password)) {
        // Check if the user is locked out due to 3 failed attempts
        if (isset($_SESSION['login_attempts']) && $_SESSION['login_attempts'] >= 3 && isset($_SESSION['lockout_time']) && time() - $_SESSION['lockout_time'] < 3600) {
            // User is locked out, return error response
            $response = array('status' => 'error', 'message' => '用户名/密码错误，请 1 小时候再登入');
            echo json_encode($response);
            exit();
        } else {
            // Check IP address
            $ip_address = $_SERVER['REMOTE_ADDR'];
            // You can also use $_SERVER['HTTP_X_FORWARDED_FOR'] if your server is behind a proxy

            // If IP address is in the lockout list, return error response
            $lockout_attempts = 3; // Number of allowed failed login attempts before lockout
            $lockout_time = 3600; // Lockout time in seconds (1 hour)

            // Fetch failed login attempts for current IP address from database or other storage
            $failed_attempts = isset($_SESSION['failed_login_attempts'][$ip_address]) ? $_SESSION['failed_login_attempts'][$ip_address] : 0;

            if ($failed_attempts >= $lockout_attempts) {
                // Update lockout time in session
                $_SESSION['lockout_time'] = time();
                // User is locked out, return error response
                $response = array('status' => 'error', 'message' => '用户名/密码错误，请 1 小时候再登入');
                echo json_encode($response);
                exit();
            }
        }

        // Include the database connection
        require_once('../config/conn.php');
        // Prepare the SQL statement
        $stmt = $pdo->prepare('SELECT * FROM admin WHERE username = :username LIMIT 1');
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!preg_match($pattern, $username)) {
            $response = array('status' => 'error', 'message' => '用户名/密码错误， 请再尝试');
            echo json_encode($response);
            exit();
        }


        // Verify the password
        if ($user && password_verify($password, $user['password'])) {
            // Login successful, store user ID in session
            $_SESSION['user_id'] = $user['id'];

            // Reset failed login attempts
            if (isset($_SESSION['login_attempts'])) {
                unset($_SESSION['login_attempts']);
                unset($_SESSION['lockout_time']);
            }

            // Replace "admin" with the random string in the URL
            $redirect_url = 'dashboard.php?url=20235899ACC_URI';

            // Return success response
            $response = array('status' => 'success', 'url' => $redirect_url);
            echo json_encode($response);
            exit();
        } else {
            // Increment failed login attempts
            if (isset($_SESSION['login_attempts'])) {
                $_SESSION['login_attempts']++;
            } else {
                $_SESSION['login_attempts'] = 1;
            }

            // Set lockout time if 3 failed login attempts
            if ($_SESSION['login_attempts'] >= 99) {
                $_SESSION['lockout_time'] = time();
            }

            // $response = array('status' => 'error', 'message' => 'Too many failed login attempts.');
            $response = array('status' => 'error', 'message' => '用户名/密码错误， 请再尝试');
            echo json_encode($response);
            exit();
        }
    } else {
        $response = array('status' => 'error', 'message' => '用户名/密码错误， 请再尝试');
        echo json_encode($response);
        exit();
    }
}
