<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<title>BMI Calculator</title>
<style type="text/css">
    body { 
        background: linear-gradient(-45deg,rgb(90, 0, 150),rgb(240, 236, 39),rgb(255, 36, 36),rgb(238, 185, 71));
    }
    h1 {
        font-weight: bold ;
    }
    input[type=number] {
        padding: 10px;
        border: none;
        border-radius: 5px;
        width: 300px;
    }
    .container { 
        position: absolute;
        top: 50%;
        left: 50%;
        width: 500px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: transparent;
        box-sizing: border-box;
        box-shadow:  0 15px 20px rgba(0,0,0,.6);
        border-radius: 9px;
    }
</style>
</head>
 <body>
<div class="container">
 <center>   <h1> BMI Calculator </h1>
    <form method="POST">
    <p> Height (in cm): <input type="number" name="Height" placeholder="Enter your Height"> </p>
    <p>Weight (in kg): <input type="number" name="Height" placeholder="Enter your Weight"> </p>
    <button type="submit"> Calculate </button>
</form> </center>
</div>

</body>
</html>