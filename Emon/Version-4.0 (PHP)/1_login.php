<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design_css.css">
    <title>Document</title>
</head>
<body>
    <div class="c1">
        <h1>Login</h1>
        <form method="post" action="loginCheck.php">
            <fieldset style="border: none;">
                <div class="c2">
                    <label for="username">Username</label>
                    <input name="username" id="username" type="text">
                    <p id="umsg"></p>
                </div>
    
                <div class="c2">
                    <label for="pass">Password</label>
                    <input name="pass" id="pass" type="password">
                    <p id="pmsg"></p>
                </div>
    
                <button type="submit" class="c3">Login</button>
                <p id="vmsg"></p>
    
                <p class="c4">
                    <a href="3_for_pass.html">Forgot Password?</a><br><br>
                    Don't have an account? <a href="2_signup.html">Sign up</a>
                </p>
            </fieldset>
        </form>
    </div>

    <script>
        function validate(){

            let username = document.getElementById('username').value.trim();
            let umsg = document.getElementById('umsg');

            if(username == ""){
                umsg.innerHTML = "please type username first!";
                umsg.style.color = 'red';
            }else{
                umsg.innerHTML = "";
            }            

            let password = document.getElementById('pass').value.trim();
            let pmsg = document.getElementById('pmsg');

            if(password == ""){
                pmsg.innerHTML = "please type username first!";
                pmsg.style.color = 'red';
            }else{
                pmsg.innerHTML = "";
            }
            
            let vmsg = document.getElementById('vmsg');

            if(username !== password){
                vmsg.innerHTML = "Username and password should be the same";
                vmsg.style.color = 'red';
            }else{
                vmsg.innerHTML = "";
            }
            return false;
        }
    </script>
</body>
</html>