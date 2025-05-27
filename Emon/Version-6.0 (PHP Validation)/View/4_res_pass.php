<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="../Asset/design_css.css">
</head>
<body>
    <div class="c1">
        <h1>Reset Password</h1>
        <form method="post" action="../Controller/4_res_passCheck.php" onsubmit="">

            <div class="c2">
                <label>Enter New Password</label>
                <input name="newpass" id="newpass" type="password">
                <p id="pmsg_1"></p>
            </div>

            <div class="c2">
                <label>Confirm New Password</label>
                <input name="confirmpass" id="confirmpass" type="password">
                <p id="pmsg_2"></p>
            </div>

            <button type="submit" name="submit" value="submit" class="c3">Submit</button>
            <p id="vmsg"></p>
        </form>
    </div>

    <script>
        function validate() {
            
            let newpass = document.getElementById('newpass').value.trim();
            let pmsg1 = document.getElementById('pmsg_1');
            
            // New password
            if (newpass === "") {
                pmsg1.innerHTML = "Please enter a new password.";
                pmsg1.style.color = "red";
                return false;
            } else {
                pmsg1.innerHTML = "";
            }  
    
            // Confirm password
            let confirmpass = document.getElementById('confirmpass').value.trim();
            let pmsg2 = document.getElementById('pmsg_2');
            
            if (confirmpass === "") {
                pmsg2.innerHTML = "Please confirm your new password.";
                pmsg2.style.color = "red";
                return false;
            } else {
                pmsg2.innerHTML = "";
            }  
    
            let vmsg = document.getElementById('vmsg');
            
            if (newpass !== confirmpass) {
                vmsg.innerHTML = "Passwords do not match.";
                vmsg.style.color = "red";
                return false;
            } else {
                vmsg.innerHTML = "";
            }
    
            return true;
        }
    </script>
</body>
</html>
