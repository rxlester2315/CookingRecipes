<?php 
include('database.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    // Get form data
    $typepayment = $_POST['typeofpayment'] ?? null;
    $totalprice = $_POST['totalprice'] ?? null;
    $istatus = 'Pending';

    // Validate inputs
    if (!$typepayment || !$totalprice) {
        die("Error: Required fields are missing.");
    }

    // Generate UNIQUE order number (timestamp + random)
    $timestamp = date('YmdHis'); // YearMonthDayHourMinuteSecond
    $random = strtoupper(bin2hex(random_bytes(2))); // 4-character random string
    $order_number = "ORD-{$timestamp}-{$random}";

    // Fetch cart items
    $sql = "SELECT c.product_id, c.quantity, r.recipeimage AS imagefile , r.recipename AS item_name, r.typeoffood AS foodtype, r.price
            FROM cart_items c
            JOIN recipes r ON c.product_id = r.id
            UNION ALL
            SELECT c.product_id, c.quantity,  d.desertimage AS imagefile, d.desertname AS item_name, d.typeoffood AS foodtype, d.price
            FROM cart_items c
            JOIN deserts d ON c.product_id = d.id";

    $result = $conn->query($sql);

    if (!$result) {
        die("Error fetching cart items: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        $items = [];
        while ($row = $result->fetch_assoc()) {
            $items[] = [
                'product_id' => $row['product_id'],
                'item_name' => $row['item_name'],
                'foodtype' => $row['foodtype'],
                'price' => $row['price'],
                'quantity' => $row['quantity'],
                'imagefile' => $row['imagefile']
            ];
        }
        $items_json = json_encode($items);

        // Insert order with generated order number
        $stmt = $conn->prepare("
            INSERT INTO orders 
            (typeofpayment, totalprice, items, status, order_number) 
            VALUES (?, ?, ?, ?, ?)
        ");
        $stmt->bind_param("sdsss", 
            $typepayment, 
            $totalprice, 
            $items_json, 
            $istatus, 
            $order_number
        );

        if ($stmt->execute()) {
            // Clear cart only after successful order
            $conn->query("DELETE FROM cart_items");
            header("Location: success_placed.php");
            exit();
        } else {
            // Handle duplicate order number (extremely rare but possible)
            if ($conn->errno == 1062) {
                die("Error: Order failed. Please try again.");
            } else {
                die("Error: " . $conn->error);
            }
        }

        $stmt->close();
    } else {
        echo "Cart is empty";
    }

    $conn->close();
}
?>