<?php
// Function to compute total price per item with VAT
function computeTotalWithVAT($price, $quantity) {
    $subtotal = $price * $quantity; 
    $vat = $subtotal * 0.12; 
    return $subtotal + $vat;
}

// List of products with price and quantity
$products = [
    ["productname" => "Burger", "regularprice" => 50, "quantity" => 2],
    ["productname" => "Fries", "regularprice" => 30, "quantity" => 3],
    ["productname" => "Drinks", "regularprice" => 20, "quantity" => 4],
    ["productname" => "Hotdog", "regularprice" => 40, "quantity" => 1] // example of additional product
];
// Variable to hold total of all items
$grandTotal = 0;

echo "<h3>🧾 Customer Receipt</h3>";
echo "<hr>";

foreach($products as $product) {
    $name = $product["productname"];
    $price = $product["regularprice"];
    $qty = $product["quantity"];
    $total = computeTotalWithVAT($price, $qty);

    // Add to grand total
    $grandTotal += $total;

    // Display item details
    echo "🛒 Product: $name<br>";
    echo "💰 Price: ₱$price x $qty<br>";
    echo "📦 Total with VAT: ₱" . round($total, 2) . "<br>";
    echo "<hr>";
}

echo "<h3>💵 Grand Total (All Items + 12% VAT): ₱" . round($grandTotal, 2) . "</h3>";
?>
