<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <title>BMI Calculator</title>
    <style type="text/css">
    body { 
        background: linear-gradient(-45deg,rgb(90, 0, 150),rgb(240, 236, 39),rgb(255, 36, 36),rgb(238, 185, 71));
        background-size: 400% 400%;
        animation: gradientBG 10s ease infinite;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin: 0;
        flex-direction: column;
        height: 100vh;
        font-family: 'Arial', sans-serif;
    }
    
    h1 {
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    input[type=number], input[type=submit] { 
        font-size: 16px;
        padding: 15px;
        border-radius: 5px;
        border: 1px solid #ccc;
        width: 100%;
        margin: 8px 0;
        transition: all 0.3s ease;
    }

    input[type=number] {
        background-color: #f9f9f9;
    }

    input[type=submit] { 
        font-weight: bold; 
        background-color: rgb(54, 161, 5);
        cursor: pointer;
        text-transform: uppercase;
        color: white;
        border: 1px solid #ccc;
    }

    input[type=submit]:hover { 
        background-color: rgb(34, 121, 3);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    input[type=number]:focus, input[type=submit]:focus {
        outline: 3px solid rgb(54, 161, 5);
        box-shadow: 0 0 5px rgba(54, 161, 5, 0.6);
    }

    .container { 
        width: 100%;
        max-width: 450px;
        padding: 20px;
        text-align: center;
        box-sizing: border-box;
        box-shadow: 0 15px 20px rgba(0, 0, 0, 0.6);
        border-radius: 15px;
        background: rgba(255, 255, 255, 0.9);
        animation: fadeIn 1s ease-in-out;
        align-items: center;
    }

    .result-box {
        width: 100%;
        max-width: 450px;
        padding: 20px;
        border-radius: 15px;
        font-size: 20px;
        font-weight: bold;
        animation: fadeIn 1s ease-in-out;
        text-align: center;
        box-sizing: border-box;
        align-items:center;
        margin: 10px;
    }
    .underweight {
        background-color:rgb(253, 249, 0);
    }
    .normal {
        background-color: #90EE90;
    }
    .overweight {
        background-color: #FFDD57;
    }
    .Obese {
        background-color: #FFA07A;
    }
    .obese {
        background-color: #B22222;
    }

    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(-20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes gradientBG {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    @media (max-width: 768px) {
        .container, .result-box {
            width: 90%;
            padding: 15px;
        }
    }
</style>
</head>
 <body>
<div class="container">
    <h1> BMI Calculator </h1>
    <form method="POST">
    <input type="number" name="Height" step="0.01" placeholder="Enter your Height"><br>
    <input type="number" name="Weight" step="0.1" placeholder="Enter your Weight"><br>
    <input type="submit" name="calculator" class="btn" value="Calculate BMI">
</form> 
</div>


 <div class='result-box'>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Weight = $_POST['Weight'];
    $Height = $_POST['Height'];

    if (is_numeric($Weight) && is_numeric($Height) && $Height > 0 && $Weight > 0) {
        if ($Height > 10 ) {
            $Height = $Height / 100; 
        }

        $bmi = $Weight / ($Height * $Height);
        $bmiFormatted = number_format($bmi, 2);

    if ($bmi < 18.5) { 
             $classification = "Underweight";
                $risk = "Low (but risk of other clinical problems increased)";
                $class = "underweight";
    }   elseif ( $bmi >= 18.5 && $bmi <= 24.9) {
                $classification = "Normal";
                $risk = "Average";
                $class = "normal";
    }   elseif ( $bmi >= 25 && $bmi <= 29.9) {
                $classification = "Overweight";
                $risk = "Mildly Increased";
                $class = "overweight";
    }   elseif ( $bmi >= 30 && $bmi <= 34.9) {
                $classification  =  "Obese (Class I)";
                $risk = "Moderate";
                $class = "Obese";
    }   elseif ( $bmi >= 35 && $bmi <= 39.9) {
                $classification =  "Obese (Class II)";
                $risk = "Severe";
                $class = "Obese";
    }   else {
                $classification = "Obese (Class III)";
                $risk = "Very Severe";
                $class = "obese";
    }
    echo "<div class='result-box $class'>";
    echo "<h3>BMI Result</h3>";
    echo "<p>Your BMI value is: <strong>$bmiFormatted</strong></p>";
    echo "<p><strong>$classification</strong></p>";
    echo "<p>Risk Level: $risk</p>";
    echo "</div>";

    }   else {
        echo "<p style='color:red;'>Please enter valid weight and height values.</p>";
    }
}
?>
</div>
</div>
</body>
</html>
