<?php
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

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $items = $_POST["items"] ?? [];
    $quantities = $_POST["quantities"] ?? [];
    $orderType = $_POST["order_type"] ?? "Dine In"; // Default to Dine In if not set

    $totalAmount = calculateTotal($items, $quantities, $orderType, $menu);

    echo "<div class='summary'>";
    echo "<h3>Order Summary:</h3>";
    foreach ($items as $index => $item) {
        echo "$item (Quantity: " . (int)$quantities[$index] . ")<br>";
    }
    echo "Order Type: $orderType <br>";
    echo "<strong>Total Amount: ₱" . number_format($totalAmount, 2) . "</strong>";
    echo "</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            text-align: center;
        }
        .menu-container {
            background: url(https://scontent.fcgy2-2.fna.fbcdn.net/v/t1.15752-9/488424234_568227549139020_7043282278265946350_n.jpg?stp=dst-jpg_p480x480_tt6&_nc_cat=103&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeF0gjrl36PxMrYZTlRP8wLGKpCv4TL4k1EqkK_hMviTUYHV1xeGeArnfk-4OFinmczpXQn1UuDSxleD7Y8OpDi5&_nc_ohc=pa1DqKziN3kQ7kNvwH9IZwg&_nc_oc=AdlagqtYvc3ShpLZnWBCf7Vs1csZoJ5aX7qzWtmYLc4y3S25CmZCtyAkeNLNbONgTXw&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fcgy2-2.fna&oh=03_Q7cD1wEk87LOVJ3YR8-IKgOK9LCG6BmUqWm1hGxaP7wOe8TeCA&oe=6817284F);
            background-size: 540px;
            padding: 20px;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 50%;
            max-width: 500px;
            font: bold;
        }
        .container {
            text-align:left;
            padding: 30px;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 65%;
            max-width: 500px; 
            background: linear-gradient(-45deg, #ffde59, #ff914d);
        }
        .order-container {
            background: linear-gradient(-45deg, #ffde59, #ff914d);
            padding: 20px;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 50%;
            max-width: 525px;
        }
        h2 {
            color: #1f83f5;
            text-align: center;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background:rgb(209, 166, 72);
            color: white;
        }
        tbody { 
            text-align: left;
        }
        .order-container label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background: #1f83f5;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
            width: 50%;
            width:560px;
        }
        input[type="submit"]:hover {
            background: #0e6ad4;
        }
    </style>
</head>
<body>

<div class="menu-container">
   <h2>Menu</h2>
    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Price (₱)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($menu as $item => $price) { ?>
                <tr>
                    <td><?php echo $item; ?></td>
                    <td><?php echo number_format($price, 2); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<div class="container">
    <h2>Customer Order</h2>
    <form method="post" action="summary.php">
        <?php foreach ($menu as $item => $price) { ?>
            <input type="checkbox" name="items[]" value="<?php echo $item; ?>"> 
            <label><?php echo $item . " - ₱" . number_format($price, 2); ?></label>
            <input type="number" name="quantities[]" min="1" placeholder="Quantity" required>
        <?php } ?>
</div>
        <div class="order-container">
           <h2> <label>Choose Order Type:</label>
           <h4>
            <input type="radio" name="order_type" value="Dine In" required> Dine In 
            <input type="radio" name="order_type" value="Take Out"> Take Out (12% tax) </h4>
        </div>
        <div>
        <input type="submit" value="Calculate Total">
    </form>
</div>
</body>
</html>
