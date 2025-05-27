<?php
session_start();
if (isset($_POST['submit'])) {
    $newpass = isset($_POST['newpass']) ? trim($_POST['newpass']) : "";
    $confirmpass = isset($_POST['confirmpass']) ? trim($_POST['confirmpass']) : "";
} else {
    echo "Invalid request! Please submit form!";
    exit;
}


if ($newpass == "" && $confirmpass == "") {
    echo "Please fill out all fields.<br>";
}

// Validate newpass
function newpasscheck($newpass){
    if($newpass==""){
        echo"password field cannot be empty";
        return false;
    }
    else
    {
        if (strlen($newpass) < 4) {
            echo"password must be at least 4 characters long";
            return false;
        }else{
            return true;
        }
    }
}


// Validate confirmpass
function confirmpasscheck($confirmpass){
    if($confirmpass==""){
        echo"password field cannot be empty";
        return false;
    }
    else
    {
        if (strlen($confirmpass) < 4) {
            echo"password must be at least 4 characters long";
            return false;
        }else{
            return true;
        }
    }
}

//validate
if ($newpass !== $confirmpass) {
        echo "Passwords do not match.";
        exit;
    }
    
if(newpasscheck($newpass) && confirmpasscheck($confirmpass)){
    header('location: ../view/1_login.php');
}


?>