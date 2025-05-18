<?php
    session_start();
    if(isset($_SESSION['status'])){

    }else{
        header('location: 1_login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
    <link rel="stylesheet" href="design_css2.css">
</head>
<body>
    <header>
        <div class="c5">Logo</div>
    </header>

    <div class="c6">
        <nav class="c7">
            <ul class="c8">
                <li><a href="logged_dashboard.html">Home</a></li>
                <li><a href="view_profile.html">View Profile</a></li>
                <li><a href="edit_profile.html">Edit Profile</a></li>
                <li><a href="profile_picture.html">Change Profile Picture</a></li>
                <li><a href="change_password.html">Change Password</a></li>
                <li><a href="logout.html">Logout</a></li>
            </ul>
        </nav>

        <main class="c9">
            <h1>View Profile</h1>
            <form>
                <div class="c2">
                    <label>Name</label><br>
                    <input name="name" id="name" type="text" value="Asif Emon"> <br>
                </div>

                <div class="c2">
                    <label>Username</label><br>
                    <input name="username" id="username" type="text" value="asifemon"> <br>
                </div>

                <div class="c2">
                    <label>Email</label><br>
                    <input name="email" id="email" type="email" value="asifemon@gmail.com"> <br>
                </div>

                <div class="c2">
                    <label>Gender</label><br>
                    <input type="radio" name="gender" value="Male" checked> Male
                    <input type="radio" name="gender" value="Female"> Female <br>
                </div>

                <div class="c2">
                    <label>Password</label><br>
                    <input name="pass" id="pass" type="password" value="12345678" disabled> <br>
                </div>

                <div class="c11">
                    <button type="submit" class="c10">Save Changes</button>
                    <button type="reset" class="c10" >Reset</button>
                </div>
            </form>
        </main>
    </div>

</body>
</html>
