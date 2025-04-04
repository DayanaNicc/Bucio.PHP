<?php
// Define menu items and their prices
$menu = [
    "Chocolate" => 75,
    "Honey Butter" => 70,
    "Blueberry White Chocolate" => 140,
    "Strawberry White Chocolate" => 140,
    "Creamcheese" => 150,
    "Belgian Milk Chocolate" => 140,
    "White Forrest" => 140,
    "Naughty Nutella" => 170,
    "Royal Almond Cocoa" => 170,
];

// Function to get the price of a selected item
function getPrice($item, $menu) {
    return $menu[$item] ?? 0;
}

// Function to calculate tax if applicable
function calculateTax($total, $orderType) {
    return ($orderType == "Take Out") ? $total * 0.12 : 0; // 12% tax for takeout
}

// Function to calculate the total amount due
function calculateTotal($items, $quantities, $orderType, $menu) {
    $subtotal = 0;
    foreach ($items as $index => $item) {
        $price = getPrice($item, $menu);
        $quantity = (int) $quantities[$index];
        $subtotal += $price * $quantity;
    }
    $tax = calculateTax($subtotal, $orderType);
    return $subtotal + $tax;
}

// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $items = $_POST["items"] ?? [];
    $quantities = $_POST["quantities"] ?? [];
    $orderType = $_POST["order_type"] ?? "Dine In"; // Default to Dine In

    $totalAmount = calculateTotal($items, $quantities, $orderType, $menu);
} else {
    // Redirect back if accessed directly
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f5f5;
            text-align: left;
            background: url(https://scontent.fcgy2-4.fna.fbcdn.net/v/t1.15752-9/488182993_465050823359357_7748482693467143954_n.png?stp=dst-png_p480x480&_nc_cat=105&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeGVusd5y9d0lktq81y2wE6X5TILjHNeiXjlMguMc16JeIQ0Nc1Z0-BniySgydBVi5i94jIcl-r1rtgwT0KOpEia&_nc_ohc=j79KgDant20Q7kNvwF7uHNN&_nc_oc=Adm0aWdA-vL7EISMoOtHkwT2GCGeqgOkSqO71WC4WFZXMCDoGCWxlsBcrgYoQfgPOgs&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fcgy2-4.fna&oh=03_Q7cD1wHI219ltRtpAEHWIu7lYy_WD0Kt77o1GvjkQqe-O4c3vw&oe=68171FFF);
            background-size: 550px;
        }
        .summary-container {
            background: linear-gradient(-45deg, #ffde59, #ff914d);
            padding: 20px;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 50%;
            max-width: 500px;
            display: block;
            position: absolute;
            top: 10%;
            left: 35%;
        }
        h2 {
            color: #1f83f5;
        }
        .summary {
            background:
            color: #3c763d;
            padding: 15px;
            border-radius: 5px;
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="summary-container">
    <center><h2>Order Summary</h2></center>
    <div class="summary">
        <?php foreach ($items as $index => $item) { ?>
            <p><?php echo "$item (Quantity: " . (int)$quantities[$index] . ")"; ?></p>
        <?php } ?>
        <p>Order Type: <?php echo $orderType; ?></p>
       <center> <strong>Total Amount: ₱<?php echo number_format($totalAmount, 2); ?></strong></center>
    </div>
    <br>
    <a href="PT8_BUCIO_WITH_ALGORITHM.php">Go Back</a>
</div>

</body>
</html>
