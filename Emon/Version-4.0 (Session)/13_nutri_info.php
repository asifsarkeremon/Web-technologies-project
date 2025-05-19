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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Nutritional Info</title>
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
                <li><a href="9_receipe.php">Recipe</a></li>
                <li><a href="11_mealplan.php">Meal Planner</a></li>
                <li><a href="12_Shop_list.php">Shopping List</a></li>
                <li><a href="13_nutri_info.php">Nutritional Info</a></li>
                <li><a href="14_timer.php">Cooking Timer</a></li>
                <li><a href="1_login.php">Logout</a></li>
            </ul>
        </nav>
        
        <main class="c10">
            <h1>Nutritional Information</h1>
            
            <section class="c11" class="c14">
                <h2>Nutrition Label</h2>
                
                <table class="c15">
                    <tr>
                        <th class="c16">Nutrient</th>
                        <th class="c16">Amount</th>
                    </tr>
                    
                    <tr>
                        <td class="c16">Calories</td>
                        <td class="c16">250 kcal</td>
                    </tr>
                    
                    <tr>
                        <td class="c16">Total Fat</td>
                        <td class="c16">8g</td>
                    </tr>
                    
                    <tr>
                        <td class="c16">Saturated Fat</td>
                        <td class="c16">3g</td>
                    </tr>
                    
                    <tr>
                        <td class="c16">Cholesterol</td>
                        <td class="c16">30mg</td>
                    </tr>
                    
                    <tr>
                        <td class="c16">Sodium</td>
                        <td class="c16">120mg</td>
                    </tr>
                    
                    <tr>
                        <td class="c16">Total Carbohydrates</td>
                        <td class="c16">35g</td>
                    </tr>
                    
                    <tr>
                        <td class="c16">Dietary Fiber</td>
                        <td class="c16">4g</td>
                    </tr>
                    
                    <tr>
                        <td class="c16">Sugars</td>
                        <td class="c16">5g</td>
                    </tr>
                    
                    <tr>
                        <td class="c16">Protein</td>
                        <td class="c16">12g</td>
                    </tr>
                </table>
            </section>
            
            <section class="c11">
                <h2>Macro Breakdown</h2>
                <ul>
                    <li>Protein: 20%</li>
                    <li>Carbohydrates: 56%</li>
                    <li>Fat: 24%</li>
                </ul>
            </section>
            
            <section class="c11">
                <h2>Dietary Tags</h2>
                <div class="c18">
                    <span class="c18_1">Gluten-Free</span>
                    <span class="c18_2">Vegan</span>
                    <span class="c18_3">High Protein</span>
                    <span class="c18_4">Low Carb</span>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
