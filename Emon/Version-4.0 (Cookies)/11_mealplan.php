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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Meal Planner</title>
    <link rel="stylesheet" href="design_css3.css" />
</head>
<body>
    <header class="header_1">
        <div class="c5">Foodie</div>
        <div class="c6">
            <a href="5_profile.php">User</a> |
            <a href="2_signup.php">Logout</a>
        </div>
    </header>
    
    <div class="c7">
        <nav class="c8">
            <ul class="c9">
                <li><a href="8_dashboard.php">Home</a></li>
                <li><a href="9_receipes.php">Recipe</a></li>
                <li><a href="11_mealplan.php">Meal Planner</a></li>
                <li><a href="12_Shop_list.php">Shopping List</a></li>
                <li><a href="13_nutri_info.php">Nutritional Info</a></li>
                <li><a href="14_timer.php">Cooking Timer</a></li>
                <li><a href="15_logout.php">Logout</a></li>
            </ul>
        </nav>
        
        <main class="c10">
            <h1>Meal Planner</h1>
            
            <section class="c11">
                <table border="1">
                    <tr>
                        <th class="c13">Day</th>
                        <th class="c13">Breakfast</th>
                        <th class="c13">Lunch</th>
                        <th class="c13">Snacks</th>
                        <th class="c13">Dinner</th>
                    </tr>
                    
                    <tr>
                        <td class="c13">Saturday</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td class="c13">Sunday</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td class="c13">Monday</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td class="c13">Tuesday</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td class="c13">Wednesday</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td class="c13">Thursday</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td class="c13">Friday</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </section>
        </main>
    </div>
</body>
</html>
