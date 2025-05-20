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
    <title>Recipe View</title>
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
            <h1>Receipes</h1>
            
            <section class="c11">
                <div class="c12">
                    <h3>Ingredients</h3>
                    <ul>
                        <li>Ingredient 1</li>
                        <li>Ingredient 2</li>
                        <li>Ingredient 3</li>
                    </ul>
                </div>
            </section>

            <section>
                <div class="c12">
                    <h3>Instructions</h3>
                    <ol>
                        <li>Step 1</li>
                        <li>Step 2</li>
                        <li>Step 3</li>
                    </ol>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
