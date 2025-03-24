<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <title>BMI Calculator</title>
<style type="text/css">
    body { 
        background: linear-gradient(-45deg,rgb(90, 0, 150),rgb(240, 236, 39),rgb(255, 36, 36),rgb(238, 185, 71));
        font-family: Arial, sans-serif;
            text-align: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            flex-direction: column;
    }
    h1 {
        font-weight: bold ;
    }
    .container { 
        position: absolute;
        top: 50%;
        left: 50%;
        width: 500px;
        padding: 100px 40px; 
        text-align: center;
        transform: translate(-50%, -50%);
        background: transparent;
        box-sizing: border-box;
        box-shadow:  0 15px 20px rgba(0,0,0,.6);
        border-radius: 5px 5px 5px 0px;
        font-weight: bold;
        text-transform: uppercase; 
        letter-spacing: 3px; 
    }
    input[type=text] { 
        font-size: 16px;
        display: block;
        padding: 15px;
        border-radius: 5px;
        border: none;
        width: 100%; 
        text-align: center;
        letter-spacing: 2px;
    }
    input[type=submit] { 
        font-size: 16px;
        font-weight: bold; 
        background-color:rgb(152, 17, 243);
        cursor: pointer;
        transition: 0.8s all;
        padding: 15px;
        text-transform: uppercase;
    }
    .result-box {
            width: 300px;
            margin-top: 15px;
            padding: 15px;
            border-radius: 10px;
            font-size: 18px;<html xmlns="http://www.w3.org/1999/xhtml"> 
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
    }
    h1 {
        font-weight: bold ;
        color: #333;
    }
    input[type=number] { 
        font-size: 16px;
        padding: 15px;
        border-radius: 5px;
        border:  1px solid #ccc;
        width: 100%;
        margin: 8px 0;
    }
    input[type=submit] { 
        font-size: 16px;
        font-weight: bold; 
        background-color: rgb(54, 161, 5);
        cursor: pointer;
        transition: 0.3s;
        padding: 15px;
        text-transform: uppercase;
        color: white;
        border:  1px solid #ccc;
        border-radius: 5px;
        width: 100%;
        margin: 8px 0;
    }
    input[type=submit]:hover { 
    background-color: rgb(34, 121, 3);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    .container { 
        width: 410px;
        padding: 20px;
        text-align: center;
        box-sizing: border-box;
        box-shadow:  0 15px 20px rgba(0,0,0,.6);
        border-radius: 15px;
       background: rgba(255, 255, 255, 0.9);
       animation: fadeIn 1s ease-in-out;
       align-items: center;
    }
    .result-box {
            width: 410px;
            padding: 20px;
            border-radius: 15px;
            font-size: 20px;
            font-weight: bold;
            animation: fadeIn 1s ease-in-out;
            text-align: center;
            box-sizing: border-box;
            align-items: center;
        }
        @keyframes fadeIn {
            0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
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
 if (isset($_POST['calculator'])) {
    $Weight = $_POST['Weight'];
    $Height = $_POST['Height'];

    if (is_numeric($Weight) && is_numeric($Height) && $Height > 0 && $Weight > 0) {
        if ($Height > 10 ) {
            $Height = $Height / 100; 
        }

        $bmi = $Weight / ($Height * $Height);
        $bmiFormatted = number_format($bmi, 2);

    if ($bmi < 18.5) { 
        $category = "Underweight";
        $risk = "Low (but risk of other clinical problems increased)";
        $class = "underweight";
    }   elseif ( $bmi >= 18.5 && $bmi <= 24.9) {
        $category = "Normal";
        $risk = "Average";
        $class = "normal";
    }   elseif ( $bmi >= 25 && $bmi <= 29.9) {
        $category = "Overweight";
                $risk = "Mildly Increased";
                $class = "overweight";
    }   elseif ( $bmi >= 30 && $bmi <= 34.9) {
        $category =  "Obese (Class 1)";
                $risk = "Moderate";
                $class = "Obese";
    }   elseif ( $bmi >= 35 && $bmi <= 39.9) {
        $category =  "Obese (Class 2)";
        $risk = "Severe";
        $class = "Obese";
    }   else {
        $category = "Obese (Class 3)";
        $risk = "Very Severe";
        $class = "obese";
    }
    echo "<div class='result-box $class'>";
    echo "<h3>BMI Result</h3>";
    echo "<p>Your BMI value is: <strong>$bmiFormatted</strong></p>";
    echo "<p><strong>$category</strong></p>";
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
