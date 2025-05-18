<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['pass']);

    if ($username == "" || $password == "") {
        echo "Please fill in both username and password.";
    } elseif (
        isset($_SESSION['signup_username']) && isset($_SESSION['signup_password']) &&
        $username === $_SESSION['signup_username'] &&
        $password === $_SESSION['signup_password']
    ) {
        $_SESSION['status'] = true;
        $_SESSION['username'] = $username;
        header("location: 8_dashboard.php");
        exit();
    } else {
        echo "Invalid username or password!";
    }
} else {
    echo "Invalid request!";
}
?>