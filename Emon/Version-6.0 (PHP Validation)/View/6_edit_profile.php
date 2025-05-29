<?php
    session_start();
    if(isset($_COOKIE['status'])){

    }else{
        header('location: 1_login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../Asset/design_css2.css">
</head>
<body>
    <header>
        <div class="c5">Foodie</div>
    </header>

    <div class="c6">
        <nav class="c7">
            <ul class="c8">
                <li><a href="8_dashboard.php">Home</a></li>
                <li><a href="5_profile.php">View Profile</a></li>
                <li><a href="6_edit_profile.php">Edit Profile</a></li>
                <li><a href="profile_picture.php">Change Profile Picture</a></li>
                <li><a href="7_up_pass.php">Change Password</a></li>
                <li><a href="15_logout.php">Logout</a></li>
            </ul>
        </nav>

        <main class="c9">
            <h1>Edit Profile</h1>
            <form action="5_profile.php" onsubmit="return validate()">
                <div class="c2">
                    <label>Name</label><br>
                    <input name="name" id="name" type="text" value="Asif Emon"> <br>
                    <p id="msg"></p>
                </div>

                <div class="c2">
                    <label>Username</label><br>
                    <input name="username" id="username" type="text" value="asifemon"> <br>
                    <p id="umsg"></p>
                </div>

                <div class="c2">
                    <label>Email</label><br>
                    <input name="email" id="email" type="email" value="asifemon@gmail.com"> <br>
                    <p id="emsg"></p>
                </div>

                <div class="c2">
                    <label>Gender</label><br>
                    <input type="radio" name="gender" value="Male" checked> Male
                    <input type="radio" name="gender" value="Female"> Female <br>
                    <p id="gmsg"></p>
                </div>

                <div class="c2">
                    <label>Password</label><br>
                    <input name="pass" id="pass" type="password" value="12345678" disabled> <br>
                    <p id="pmsg"></p>
                </div>

                <div class="c11">
                    <button type="submit" class="c10">Save Changes</button>
                    <button type="reset" class="c10" >Reset</button>
                </div>
            </form>
        </main>
    </div>
    <script>
        function validate(){
            // Validate Name
            let name = document.getElementById('name').value;
            let msg = document.getElementById('msg');
            msg.innerHTML = "";
            if (name === "") {
                msg.innerHTML = "Please type your name!";
                msg.style.color = 'red';
                return false;
            }

            let words = name.trim().split(" ");
            if (words.length < 2) {
                msg.innerHTML = "Name must contain at least two words.";
                msg.style.color = 'red';
                return false;
            }

            let letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            let validChars = letters + '.-';

            for (let word of words) {
                if (!letters.includes(word.charAt(0))) {
                    msg.innerHTML = "All words must start with a letter.";
                    msg.style.color = 'red';
                    return false;
                }

                for (let char of word) {
                    if (!validChars.includes(char)) {
                        msg.innerHTML = "Input can only contain letters (a-z, A-Z), periods (.), and dashes (-).";
                        msg.style.color = 'red';
                        return false;
                    }
                }
            }

            // Validate Username
            let username = document.getElementById('username').value;
            let umsg = document.getElementById('umsg');
            umsg.innerHTML = "";
            if (username === "") {
                umsg.innerHTML = "Please type username first!";
                umsg.style.color = 'red';
                return false;
            }

            // Validate Email
            let email = document.getElementById('email').value;
            let emsg = document.getElementById('emsg');
            emsg.innerHTML = "";
            if (email === "") {
                emsg.innerHTML = "Please enter your email!";
                emsg.style.color = 'red';
                return false;
            }

            let atIndex = email.indexOf('@');
            let dotIndex = email.lastIndexOf('.');
            if (atIndex <= 0 || dotIndex <= atIndex + 1 || dotIndex >= email.length - 1) {
                emsg.innerHTML = "Please enter a valid email address.";
                emsg.style.color = 'red';
                return false;
            }

            // Validate Gender
            let gender = document.querySelector('input[name="gender"]:checked');
            let gmsg = document.getElementById('gmsg');
            gmsg.innerHTML = "";
            if (gender === null) {
                gmsg.innerHTML = "At least one of them has to be selected";
                gmsg.style.color = 'red';
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
