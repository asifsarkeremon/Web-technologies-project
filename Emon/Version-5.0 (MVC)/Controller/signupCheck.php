<?php
session_start();
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $gender = trim($_POST['gender']);
    $pass = trim($_POST['pass']);

    if ($name == "" || $username == "" || $email == "" || $gender == "" || $pass == "") {
        echo "Please! Fill up all the forms.";
    } else if ($username == $pass) {

        $_SESSION['signup_name'] = $name;
        $_SESSION['signup_username'] = $username;
        $_SESSION['signup_email'] = $email;
        $_SESSION['signup_gender'] = $gender;
        $_SESSION['signup_password'] = $pass;

        
        header("location: ../View/1_login.php");
        exit();
    } else {
        echo "invalid user!";
    }
} else {
    echo "Invalid request! Please submit form!";
}
?>
