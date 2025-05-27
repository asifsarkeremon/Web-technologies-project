<?php
session_start();
if (isset($_POST['submit'])) {
    $username = isset($_POST['username']) ? trim($_POST['username']) : "";
} else {
    echo "Invalid request! Please submit form!";
    exit;
}


if ($username === "") {
    echo "Please fill out all fields.<br>";
}

// username
function usernamecheck($username) {
    if ($username == "") {
        echo "Username cannot be empty";
        return false;
    }
    return true;
}

//validate
if(usernamecheck($username))
{
    header('location: ../view/4_res_pass.php');
}
?>
