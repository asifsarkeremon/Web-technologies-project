<?php
$recipes = [
    "Italian-Breakfast" => [
        "image" => "https://images.unsplash.com/photo-1551218808-94e220e084d2?w=600&auto=format",
        "title" => "Italian Breakfast Frittata",
        "description" => "A delicious egg dish with tomatoes, basil, and mozzarella."
    ],
    "Italian-Lunch" => [
        "image" => "https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=600&auto=format",
        "title" => "Margherita Pizza",
        "description" => "Classic pizza with tomato sauce, mozzarella, and basil."
    ],
    "Italian-Dinner" => [
        "image" => "https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=600&auto=format",
        "title" => "Spaghetti Carbonara",
        "description" => "Pasta with creamy egg sauce, pancetta, and cheese."
    ],
    "Chinese-Breakfast" => [
        "image" => "https://images.unsplash.com/photo-1585032226651-759b368d7246?w=600&auto=format",
        "title" => "Congee Rice Porridge",
        "description" => "Warm rice porridge with savory toppings."
    ],
    "Chinese-Lunch" => [
        "image" => "https://images.unsplash.com/photo-1563245372-f21724e3856d?w=600&auto=format",
        "title" => "Vegetable Stir Fry",
        "description" => "Colorful veggies with garlic sauce over rice."
    ],
    "Chinese-Dinner" => [
        "image" => "https://images.unsplash.com/photo-1563245375-3f7cb974498f?w=600&auto=format",
        "title" => "Peking Duck",
        "description" => "Crispy duck served with pancakes and sauce."
    ],
    "Indian-Breakfast" => [
        "image" => "https://images.unsplash.com/photo-1630918326543-5047f7b6dc42?w=600&auto=format",
        "title" => "Masala Dosa",
        "description" => "Crispy crepe with spiced potato filling."
    ],
    "Indian-Lunch" => [
        "image" => "https://images.unsplash.com/photo-1633945274415-a3c5399027b5?w=600&auto=format",
        "title" => "Butter Chicken",
        "description" => "Tender chicken in creamy tomato sauce."
    ],
    "Indian-Dinner" => [
        "image" => "https://images.unsplash.com/photo-1601050690597-df0568f70950?w=600&auto=format",
        "title" => "Vegetable Biryani",
        "description" => "Fragrant rice with mixed vegetables."
    ]
];

// Validate request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cuisine = htmlspecialchars(trim($_POST["cuisine"] ?? ""));
    $meal = htmlspecialchars(trim($_POST["meal"] ?? ""));

    if (empty($cuisine) || empty($meal)) {
        echo "<h3 style='color:red;'>Error: Please select both cuisine and meal type.</h3>";
        echo "<p><a href='index.html'>Go Back</a></p>";
        exit;
    }

    $key = $cuisine . "-" . $meal;

    echo "<div style='font-family:Arial; max-width:600px; margin:20px auto; background:#f0f8ff; padding:20px; border-radius:10px; text-align:center;'>";

    if (array_key_exists($key, $recipes)) {
        $recipe = $recipes[$key];
        echo "<h2>Your Recipe:</h2>";
        echo "<img src='{$recipe['image']}' alt='Recipe image' style='max-width:100%; border-radius:10px; border: 3px solid #4CAF50;'><br><br>";
        echo "<h3>{$recipe['title']}</h3>";
        echo "<p>{$recipe['description']}</p>";
    } else {
        echo "<h2>$cuisine $meal</h2>";
        echo "<p style='color:orange;'>We're still adding this recipe. Check back later!</p>";
    }

    echo "<br><a href='cateindex.html' style='display:inline-block; margin-top:20px; background:#4CAF50; color:white; padding:10px 20px; border-radius:5px; text-decoration:none;'>Search Again</a>";
    echo "</div>";
}
?>
