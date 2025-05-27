<?php
session_start();
if (isset($_POST['submit'])) {
    $name     = isset($_POST['name']) ? trim($_POST['name']) : "";
    $username = isset($_POST['username']) ? trim($_POST['username']) : "";
    $email    = isset($_POST['email']) ? trim($_POST['email']) : "";
    $gender   = isset($_POST['gender']) ? trim($_POST['gender']) : "";
    $password = isset($_POST['password']) ? trim($_POST['password']) : "";
} else {
    echo "Invalid request! Please submit form!";
    exit;
}


if ($name === "" && $username === "" && $email === "" && $gender === "" && $password === "") {
    echo "Please fill out all fields.<br>";
}

// Check if it has 2 words
function hasAtLeastTwoWords($words) {
    return count($words) >= 2;
}
// Check if each word starts with a letter
function startLetter($words) {
    foreach ($words as $word) {
        if ($word === "") continue;
        if (!ctype_alpha($word[0])) {
            return false;
        }
    }
    return true;
}
// Check allowed characters in name
function validChar($words) {
    foreach ($words as $word) {
        if (!preg_match("/^[a-zA-Z.\-]+$/", $word)) {
            return false;
        }
    }
    return true;
}

// Validate name
function namecheck($name){
    $words = explode(" ", $name);

    if ($name == "") {
        echo "Name field cannot be empty.";
    }else if (!hasAtLeastTwoWords($words)){
        echo "Name must contain at least two words";
    }else if (!startLetter($words)) {
        echo "All words must start with a letter.";
    }else if (!validChar($words)){
        echo "Input can only contain letters (a-z, A-Z), periods (.), and dashes (-).";
    }
    else {
        return true;
    }
}

// username
function usernamecheck($username) {
    if ($username == "") {
        echo "Username cannot be empty";
        return false;
    }
    return true;
}


// Validate email
function emailcheck($email){
    if ($email == "") {
        echo "Name field cannot be empty";
    }

    $isValid = true;
    $atPos = strpos($email, "@");
    
    if ($atPos === false || $atPos === 0 || $atPos === strlen($email) - 1)
    {
        $isValid = false;
        echo "Email must contain '@' symbol not at the beginning or end.";
    }
    
    if ($isValid) 
    {
        return true;
    }
}

//gender
function genderCheck($gender) {
    $validGenders = ['male', 'female'];
    
    if ($gender == "") {
        echo "Gender is required.";
        return false;
    }
    return true;
}


// Validate password
function passwordcheck($password){
    if($password==""){
        echo"password field cannot be empty";
        return false;
    }
    else
    {
        if (strlen($password) < 4) {
            echo"password must be at least 4 characters long";
            return false;
        }else{
            return true;
        }
    }
}


//validate
if(namecheck($name) && usernamecheck($username) && emailcheck($email) && genderCheck($gender) && passwordcheck($password))
{
    header('location: ../view/1_login.php');
}


?>