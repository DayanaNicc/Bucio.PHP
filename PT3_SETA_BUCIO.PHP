<title> Calorie Recommendation </title>
<style type="text/css">
    body {
        background-color:#D2B48C;
    }
</style>

<?php 
function calculatecalories ($Weight,$Lifestyle) {
 If ($Lifestyle === 'A') {
    $Activityfactor = 15;
} elseif ($Lifestyle ==='S') {
    $Activityfactor = 13;
} else { 
    return "invalid lifestyle choice. Please enter 'A' for active or 'S' for sedentary.";
}

$RecommendedCalories = $Weight * $Activityfactor;
    return "Based on your weight of $Weight kg and your Lifestyle $Lifestyle, you should consume approximately $RecommendedCalories calories per day.";
}

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Weight']) && isset ($_POST['Lifestyle'])) {
        $Weight = filter_input (INPUT_POST,'Weight',FILTER_VALIDATE_FLOAT);
        $Lifestyle = strtoupper (trim($_POST['Lifestyle']));

    if ($Weight === false || $Weight <= 0) {
        echo "Invalid input. Please enter a valid weight.";
    } else { 
        echo calculatecalories ($Weight,$Lifestyle);
    }
    } else {
            echo "No input received.";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title> Calorie Recommendation </title>
</head>
<body>
    <form method = "POST">
    <label for = "Weight"> Enter your weight (kg): </label>
    <input type = "Number"  step = "0.1" name = "Weight" id = "Weight" required>
<br>
<label for = "Lifestyle"> Enter your lifestyle ( A for active, S for Sedentary ): </label>
    <input type = "text" name = "Lifestyle" id = "Lifestyle" maxlength = "1" required>
<br>
<button type = "submit"> calculate Calories </button>
</form>
</body>
</html>
