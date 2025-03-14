<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<title> Looping Structures </title>
<style type="text/css">

    body {
        background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    }

    h1 { 
        font-weight: bold;
    }

    input[type="number"] {
        padding: 10px;
        margin: 20px;
        border: none;
        border-radius: 5px;
        width: 250px;
    }
    button {
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #77B254;
        cursor: pointer;
        font-size: 1.0em;
        width: 250px;
    }

    .container { 
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(130, 223, 247, 0.5);
        box-sizing: border-box;
        box-shadow:  0 15px 20px rgba(0,0,0,.6);
        border-radius: 0px;
    }
</style></head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="container">
   <center>
    <h1> Sum of Reciprocals </h1>
        <form method="POST">
        <label for="n"> Enter the value of N: </label>
<br>
    <input type="number" name="n" min="1" required>
<br>
    <button type="submit"> calculate </button>
</form>

</php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval ($_POST)['n']);
        $sum = 0.0; 
    for ($i = 1; $n; $i++)
{
    $sum +=1 / $i;
    }
   echo "sum is: ". number_format($sum,11)."\n";
   ?>
</center>
</div>
</body>
</html>