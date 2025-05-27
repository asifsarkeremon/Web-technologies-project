<?php
session_start(); // Start or resume session

function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Data Arrays
$seasonalData = [
    "Summer (March-June)" => [
        "produce" => ["Mango", "Jackfruit", "Litchi", "Pineapple", "Watermelon"],
        "recipes" => ["Aam doi (Mango yogurt)", "Jackfruit curry", "Litchi juice"]
    ],
    "Monsoon (July-October)" => [
        "produce" => ["Hilsha fish", "Pui shaak", "Bottle gourd", "Pumpkin"],
        "recipes" => ["Shorshe ilish", "Pui shaak bhaji", "Lau er dal"]
    ],
    "Autumn (November)" => [
        "produce" => ["New rice", "Mustard greens", "Cauliflower"],
        "recipes" => ["Panta bhat", "Shorshe shaak", "Cauliflower curry"]
    ],
    "Winter (December-February)" => [
        "produce" => ["Tomato", "Carrot", "Beetroot", "Spinach"],
        "recipes" => ["Tomato chutney", "Gajorer halwa", "Palong shaak"]
    ]
];

$holidayData = [
    "Eid-ul-Fitr" => ["Shemai", "Polao", "Beef rezala", "Firni"],
    "Eid-ul-Adha" => ["Korma", "Kabab", "Borhani", "Bhuna khichuri"],
    "Durga Puja" => ["Khichuri", "Labra", "Beguni", "Payesh"],
    "Pohela Boishakh" => ["Panta ilish", "Bhorta platter", "Pitha"],
    "Nobanno" => ["New rice payesh", "Gur er shondesh", "Naru"]
];

$marketData = [
    "Dhaka" => ["Kawran Bazar", "Jatrabari Shaheed Nagar Market", "Agargaon Farmers Market"],
    "Chittagong" => ["Khatunganj Market", "Agrabad Accessories Market"],
    "Sylhet" => ["Bandar Bazar", "Zindabazar Market"],
    "Khulna" => ["Khalishpur Market", "Sonadanga Farmers Market"],
    "Rajshahi" => ["Shaheb Bazar", "Binodpur Farmers Market"],
    "Barisal" => ["Nathullabad Market", "Rupatoli Farmers Market"]
];

// Basic styling
echo "<style>
    body { font-family: Arial; padding: 20px; max-width: 800px; margin: auto; background: #f9f9f9; }
    h3 { color: #2e8b57; }
    ul { padding-left: 20px; }
    .back { margin-top: 20px; display: block; }
    .session-summary { background: #e0ffe0; padding: 10px; margin: 15px 0; border: 1px solid #b2d8b2; }
</style>";

echo "<a class='back' href='/project/php/view/seasonal.html'>← Back to Form</a> | ";

// Logout / End session

// Handle Seasonal Form
if (isset($_POST['season_submit'])) {
    $season = sanitize($_POST['season']);
    $_SESSION['season'] = $season;

    if (isset($seasonalData[$season])) {
        echo "<h3>$season in Bangladesh</h3>";
        echo "<p><strong>Available Produce:</strong> " . implode(", ", $seasonalData[$season]["produce"]) . "</p>";
        echo "<p><strong>Recipe Ideas:</strong></p><ul>";
        foreach ($seasonalData[$season]["recipes"] as $recipe) {
            echo "<li>$recipe</li>";
        }
        echo "</ul>";
    } else {
        echo "<p style='color:red;'>Invalid season selected.</p>";
    }
}

// Handle Holiday Form
if (isset($_POST['holiday_submit'])) {
    $holiday = sanitize($_POST['holiday']);
    $_SESSION['holiday'] = $holiday;

    if (isset($holidayData[$holiday])) {
        echo "<h3>$holiday Special Meals</h3><ul>";
        foreach ($holidayData[$holiday] as $meal) {
            echo "<li>$meal</li>";
        }
        echo "</ul>";
    } else {
        echo "<p style='color:red;'>Invalid holiday selected.</p>";
    }
}

// Handle Market Form
if (isset($_POST['market_submit'])) {
    $location = sanitize($_POST['location']);
    $_SESSION['location'] = $location;

    $found = false;
    foreach ($marketData as $city => $markets) {
        if (stripos($city, $location) !== false) {
            echo "<h3>Farmers Markets in $city</h3><ul>";
            foreach ($markets as $market) {
                echo "<li>$market</li>";
            }
            echo "</ul>";
            $found = true;
            break;
        }
    }
    if (!$found) {
        echo "<p>No markets found for <strong>$location</strong>. Try a nearby major city like Dhaka or Chittagong.</p>";
    }
}

// Session Summary
if (!empty($_SESSION)) {
    echo "<div class='session-summary'><h4>🗂️ Session Summary:</h4><ul>";
    if (!empty($_SESSION['season'])) echo "<li><strong>Last Selected Season:</strong> " . $_SESSION['season'] . "</li>";
    if (!empty($_SESSION['holiday'])) echo "<li><strong>Last Selected Holiday:</strong> " . $_SESSION['holiday'] . "</li>";
    if (!empty($_SESSION['location'])) echo "<li><strong>Last Searched Location:</strong> " . $_SESSION['location'] . "</li>";
    echo "</ul></div>";
}
?>
