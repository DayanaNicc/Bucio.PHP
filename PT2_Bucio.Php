<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Activity 2 - SET C: Expansion Project</title>
<style type="text/css">
body,td,th {
    font-family: Arial, Helvetica, sans-serif;
    Color: #363330;
    Font-size: 12px;
 }
.style1 { color: #d62020 }
.style2 {
     color:rgb(0, 0, 0);
     Font-weight: bold; 
}
.style3 {Color:rgb(22, 0, 117)}
.style7 {Color:rgb(18, 11, 112);
    Font-style: italic;
}
body {
    background-color: #72dcf7; 
}
.style8 {Color: #0d41e1;
}
</style></head>

<body>
<p><&nbsp;></p>
<table width="90%" height="50%" border="2" align="center" cellpadding="0" cellspacing="0" bordercolor="#4a4646">
<tbody><tr>
<td>
        <h1 align="center">&nbsp;</h1>
        <h1 align="center" class="style8"> Public Library Expansion Project </h1>
        <h2 align="center" class="style1"> Cost Estimates </h2>
<table width=82%" border="0" align="center" cellpadding="5" cellspacing="0">
<tbody>
    <tr>
    <td width="23%" align="center" height="31" bgcolor="#b5b0b0" scope="col"> Expenditures </td>
    <td width="19%" align="right" bgcolor="#b5b0b0" scope="col"> Estimated Cost </td>
    <td width="19%" align="right" bgcolor="#b5b0b0" scope="col"> 10% Increase </td>
    <td width="19%" align="right" bgcolor="#b5b0b0" scope="col"> 15% Increase </td>
    <td width="21%" align="right" bgcolor="#b5b0b0" scope="col"> 20% Increase </td>
</tr>
<tr bgcolor="#ffbe98">
    <td align="center" bgcolor="#ffbe98"> Lumber </td>
    <td align="right" bgcolor="#ffbe98"> $ 150,000.00 </td>
    <td align="right"><span class="style7"><?php
       $Cost = 150000.00;
       $Total_Cost = $Cost + $Cost * 0.10;
       echo  "$ " . number_format ($Total_Cost, 2);
?></span></td>
    <td align="right"><span class="style7"><?php
        $Cost = 150000.00;
        $Total_Cost = $Cost + $Cost * 0.15;
        echo "$ " . number_format ($Total_Cost, 2);
?></span></td>
<td align="right"><span class="style7"><?php
            $Cost = 150000.00;
            $Total_Cost = $Cost + $Cost * 0.20;
            echo "$ " . number_format($Total_Cost, 2);
?></span></td>
</tr>
<tr bgcolor="#A9B5DF">
<td align="center" bgcolor="#A9B5DF"> Concrete </td>
<td align="right" bgcolor="#A9B5DF"> $ 78,000.00 </td>
<td align="right"> <span class="style7"><?php
    $Cost = 78000.00;
    $Total_Cost = $Cost + $Cost * 0.10;
    echo "$ " . number_format ($Total_Cost, 2)
?></span></td>
<td align="right"><span class="style7"><?php
        $Cost = 78000.00;
        $Total_Cost = $Cost + $Cost * 0.15;
        echo "$ " . number_format ($Total_Cost, 2);
?></span></td>
<td align="right"><span class="style7"><?php
        $Cost = 78000.00;
        $Total_Cost = $Cost + $Cost * 0.20;
        echo "$ " . number_format ($Total_Cost, 2);
?></span></td>
</tr>
<tr bgcolor="#ffbe98">
<td align="center" bgcolor="#ffbe98"> Drywall </td>
<td align="right" bgcolor="#ffbe98"> $ 69,000.00 </td>
<td align="right"> <span class="style7"><?php
    $Cost = 69000.00;
    $Total_Cost = $Cost + $Cost * 0.10;
    echo "$ " . number_format ($Total_Cost, 2)
?></span></td>
<td align="right"> <span class="style7"><?php
    $Cost = 69000.00;
    $Total_Cost = $Cost + $Cost * 0.15;
    echo "$ " . number_format ($Total_Cost, 2)
?></span></td>
<td align="right"> <span class="style7"><?php
    $Cost = 69000.00;
    $Total_Cost = $Cost + $Cost * 0.20;
    echo "$ " . number_format ($Total_Cost, 2)
?></span></td>
</tr>
<tr bgcolor="#A9B5DF">
<td align="center" bgcolor="#A9B5DF"> Paint </td>
<td align="right" bgcolor="#A9B5DF"> $ 12,000.00 </td>
<td align="right"> <span class="style7"><?php
    $Cost = 12000.00;
    $Total_Cost = $Cost + $Cost * 0.10;
    echo "$ " . number_format ($Total_Cost, 2)
?></span></td>
<td align="right"> <span class="style7"><?php
    $Cost = 12000.00;
    $Total_Cost = $Cost + $Cost * 0.15;
    echo "$ " . number_format ($Total_Cost, 2)
?></span></td>
<td align="right"> <span class="style7"><?php
    $Cost = 12000.00;
    $Total_Cost = $Cost + $Cost * 0.20;
    echo "$ " . number_format ($Total_Cost, 2)
?></span></td>
</tr>
<tr bgcolor="#ffbe98">
<td align="center" bgcolor="#ffbe98"> Miscellaneous </td>
<td align="right" bgcolor="#ffbe98"> $ 20,000.00 </td>
<td align="right"> <span class="style7"><?php
    $Cost = 20000.00;
    $Total_Cost = $Cost + $Cost * 0.10;
    echo "$ " . number_format ($Total_Cost, 2)
?></span></td>
<td align="right"> <span class="style7"><?php
    $Cost = 20000.00;
    $Total_Cost = $Cost + $Cost * 0.15;
    echo "$ " . number_format ($Total_Cost, 2)
?></span></td>
<td align="right"> <span class="style7"><?php
    $Cost = 20000.00;
    $Total_Cost = $Cost + $Cost * 0.20;
    echo "$ " . number_format ($Total_Cost, 2)
?></span></td>
</tr>

          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
</tr>
<tr>
    <td align="right"><strong> Total Expenditures: </strong></td>
    <td align="right"><span class="style2"><?php
$a = 150000.00;
$b = 78000.00;
$c = 69000.00;
$d = 12000.00;
$e = 20000.00;
$Total_Cost = $a + $b + $c + $d + $e;
echo "$" . number_format ($Total_Cost, 2)
?></span></td>
<td align="right"><span class="style3"><?php
$a = 165000.00;
$b = 85800.00;
$c = 75900.00;
$d = 13200.00;
$e = 22000.00;
$Total_Cost = $a + $b + $c + $d + $e;
echo "$" . number_format ($Total_Cost, 2)
?></span></td>
<td align="right"><span class="style3"><?php
$a = 172500.00;
$b = 89700.00;
$c = 79350.00;
$d = 13800.00;
$e = 23000.00;
$Total_Cost = $a + $b + $c + $d + $e;
echo "$" . number_format ($Total_Cost, 2)
?><span></td>
<td align="right"><span class="style3"><?php
$a = 180000.00;
$b = 93600.00;
$c = 82800.00;
$d = 14400.00;
$e = 24000.00;
$Total_Cost = $a + $b + $c + $d + $e;
echo "$" . number_format ($Total_Cost, 2)
?></span></td>
</tr>

<tr>
    <td colspan="5" align="right"><h4> Created By: <em> Diana Nicole C. Bucio </em> </h4></td>
</tr>
<tbody></table>
</body>
</html>
