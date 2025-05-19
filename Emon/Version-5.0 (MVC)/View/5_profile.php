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
    <title>View Profile</title>
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
            <h1>View Profile</h1>
            <form>
                <div class="c2">
                    <label>Name</label><br>
                    <input name="name" id="name" type="text" value="Asif Emon" disabled> <br>
                </div>

                <div class="c2">
                    <label>Username</label><br>
                    <input name="username" id="username" type="text" value="asifemon" disabled> <br>
                </div>

                <div class="c2">
                    <label>Email</label><br>
                    <input name="email" id="email" type="email" value="asifemon@gmail.com" disabled> <br>
                </div>

                <div class="c2">
                    <label>Gender</label><br>
                    <input type="radio" name="gender" value="Male" checked disabled> Male
                    <input type="radio" name="gender" value="Female" disabled> Female <br>
                </div>

                <div class="c2">
                    <label>Password</label><br>
                    <input name="pass" id="pass" type="password" value="12345678" disabled> <br>
                </div>

                <div class="c11">
                    <button type="submit" class="c10">Save Changes</button>
                    <button type="reset" class="c10">Reset</button>
                </div>
            </form>
        </main>
    </div>
</body>
</html>
