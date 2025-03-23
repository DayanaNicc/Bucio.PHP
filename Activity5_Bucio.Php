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
            font-size: 18px;
            font-weight: bold;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .underweight { background-color: #ADD8E6; color: #000; }
        .normal { background-color: #90EE90; color: #000; } 
        .overweight { background-color: #FFD700; color: #000; }
        .obese1 { background-color: #FFA500; color: #fff; }
        .obese2 { background-color: #FF4500; color: #fff; }
        .obese3 { background-color: #DC143C; color: #fff; }
</style>
</head>
 <body>
<div class="container">
<center>
    <h1> BMI Calculator </h1>
    <form method="POST">
    <input type="text" name="Height" placeholder="Enter your Height"><br>
    <input type="text" name="Weight" placeholder="Enter your Weight"><br>
    <input type="submit" name="calculator" value="Calculate BMI">
</form> 
</center>
</div>

 <div class='result-box'>
<?php
 if (isset($_POST['calculator'])) {
    $Weight = $_POST['Weight'];
    $Height = $_POST['Height'];

    if (is_numeric($Weight) && is_numeric($Height) && $Height > 0 && $Weight > 0) {
        $Height = $Height / 100; 

        $bmi = $Weight / ($Height * $Height);
        echo "<h4> Your BMI value is:" . number_format($bmi,2) . "</h4>";

    if ($bmi < 18.5) { 
        echo "<p>Classification: Underweight </p>";
    }   elseif ( $bmi >= 18.5 && $bmi <= 24.9) {
        echo "<p>Classification: Normal Weight </p>";
    }   elseif ( $bmi >= 25 && $bmi <= 29.9) {
        echo "<p>Classification: Overweight (Preobese) </p>";
    }   elseif ( $bmi >= 30 && $bmi <= 34.9) {
        echo "<p>Classification: Obese (Class 1) </p>";
    }   elseif ( $bmi >= 35 && $bmi <= 39.9) {
        echo "<p>Classification: Obese (Class 2) </p>";
    }   else {
        echo "<p>Classification: Obese (Class 3) </p>";
    }
    }   else {
        echo "<p> Please enter valid weight and height values. </p>";
    }
}
?>
</body>
</html>