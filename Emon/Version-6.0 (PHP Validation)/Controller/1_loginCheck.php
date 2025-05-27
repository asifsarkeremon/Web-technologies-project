<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['pass']);
} else {
    echo "Invalid request!";
}

if ($username == "" || $password == "") {
    echo "Please fill in both username and password.";
}elseif($username ==  $password){
    $_SESSION['status'] = true;
    $_SESSION['username'] = $username;
    header("location: ../view/8_dashboard.php");
    exit();
}else{
    echo "Invalid username or password!";
}
?>