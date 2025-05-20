<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $gender = trim($_POST['gender']);
    $pass = trim($_POST['pass']);

    if (empty($name) || empty($username) || empty($email) || empty($gender) || empty($pass)) {
        echo "Please fill up all the forms.";
    } else {
        $_SESSION['signup_name'] = $name;
        $_SESSION['signup_username'] = $username;
        $_SESSION['signup_email'] = $email;
        $_SESSION['signup_gender'] = $gender;
        $_SESSION['signup_password'] = $pass;

        header('Location: 1_login.php');
        exit();
    }
} else {
    echo "Invalid request! Please submit the form!";
}
?>
