<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../Asset/design_css.css">
</head>
<body>
    <div class="c1">
        <h1>Registration</h1>
        <form method="post" action="../Controller/signupCheck.php">
            <fieldset style="border: none;">

                <div class="c2">
                    <label>Name</label>
                    <input name="name" id="name" type="text" value=""> <br>
                    <p id="msg"></p>
                </div>

                <div class="c2">
                    <label>Username</label>
                    <input name="username" id="username" type="text" value=""> <br>
                    <p id="umsg"></p>
                </div>

                <div class="c2">
                    <label>Email</label>
                    <input name="email" id="email" type="email" value=""> <br>
                    <p id="emsg"></p>
                </div>

                <div class="c2">
                    <label>Gender</label>
                    <div class="c2_1">
                        <label><input type="radio" name="gender" value="Male"> Male</label>
                        <label><input type="radio" name="gender" value="Female"> Female</label>
                    </div>
                    <p id="gmsg"></p>
                </div>                

                <div class="c2">
                    <label for="pass">Password</label>
                    <input name="pass" id="pass" type="password" value=""> <br>
                    <p id="pmsg"></p>
                </div>

                <p id="vmsg"></p><br>

                <button type="submit" name="submit" value="submit" class="c3">Submit</button>
                <button type="reset" value="reset" class="c3">Reset</button>

                <a href="1_login.php" class="c4">Go to Login</a>

            </fieldset>
        </form>
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

            // Validate Password
            let password = document.getElementById('pass').value;
            let pmsg = document.getElementById('pmsg');
            pmsg.innerHTML = "";
            if (password === "") {
                pmsg.innerHTML = "Please type password!";
                pmsg.style.color = 'red';
                return false;
            }

            // Username must match Password
            let vmsg = document.getElementById('vmsg');
            vmsg.innerHTML = "";
            if (username !== password) {
                vmsg.innerHTML = "Username and password should be the same";
                vmsg.style.color = 'red';
                return false;
            }

            return true;
        }
    </script>
</body>
</html>