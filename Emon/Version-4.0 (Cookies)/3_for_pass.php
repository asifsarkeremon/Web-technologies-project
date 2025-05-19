<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="design_css.css">
</head>
<body>
    <div class="c1">
        <h1>Forgot Password</h1>
        <form action="4_res_pass.php" onsubmit="return validate()">
            <div class="c2">
                <label>Enter Username</label>
                <input name="username" id="username" type="text" value=""> <br>
                <p id="umsg"></p>
            </div>

            <button type="submit" value="submit" class="c3">Submit</button>

            <p class="c4">
                <a href="2_signup.php">Signup</a><br>
                <a href="1_login.php">Go to Login</a>
            </p>
        </form>
    </div>

    <script>
        function validate(){
            
            let username = document.getElementById('username').value;
            let umsg = document.getElementById('umsg');

            if(username == ""){
                umsg.innerHTML = "please type username first!";
                umsg.style.color = 'red';
                return false;
            }else{
                umsg.innerHTML = "";
                return true;
            }
        }
    </script>

</body>
</html>

