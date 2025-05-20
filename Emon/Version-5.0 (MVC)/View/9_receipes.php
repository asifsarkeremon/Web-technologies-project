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
    <title>Receipes</title>
    <link rel="stylesheet" href="../Asset/design_css3.css"/>
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
                <label>Category:</label>
                <select id="category">
                    <option value="">Select Category</option>
                    <option value="veg">Vegetarian</option>
                    <option value="non-veg">Non-Vegetarian</option>
                    <option value="seafood">Sea Food</option>
                </select>

                <label>Rating:</label>
                <select id="rating">
                    <option value="">Select Rating</option>
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                </select>
            </section>

            <section class="c11">
                <div class="c12">Recipe 1</div>
                <div class="c12">Recipe 2</div>
                <div class="c12">Recipe 3</div>
            </section>

            <section class="c11">
                <div class="c12">Recipe 4</div>
                <div class="c12">Recipe 5</div>
                <div class="c12">Recipe 6</div>
            </section>
        </main>
    </div>
</body>
</html>
