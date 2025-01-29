<?php 
include('database.php');

if($conn->connect_error){
    die("Connection failed:" .$conn->connect_error);
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){

    // Ensure values are received from the form
    $typepayment = isset($_POST['typeofpayment']) ? $_POST['typeofpayment'] : null;
    $totalprice = isset($_POST['totalprice']) ? $_POST['totalprice'] : null;

    // Check if required fields are provided
    if ($typepayment === null || $totalprice === null) {
        die("Error: Required fields are missing.");
    }

$sql = "SELECT c.product_id, c.quantity, r.recipename AS item_name, r.typeoffood AS foodtype, r.price
FROM cart_items c
JOIN recipes r ON c.product_id = r.id

UNION ALL

SELECT c.product_id, c.quantity, d.desertname AS item_name, d.typeoffood AS foodtype, d.price
FROM cart_items c
JOIN deserts d ON c.product_id = d.id
";


    $result = $conn->query($sql);

    if (!$result) {
        echo "Error: " . $conn->error;
    }

    if($result && $result->num_rows > 0){
        $items = [];

        while ($row = $result->fetch_assoc()) {
            $items[] = [
                'item_name' => $row['item_name'],
                'foodtype'  => $row['foodtype'],
                'price'     => $row['price'],
                'quantity'  => $row['quantity']
            ];
        }

        $items_json = json_encode($items);

        $stmt = $conn->prepare("INSERT INTO orders (typeofpayment, totalprice, items) VALUES (?, ?, ?)");
        $stmt->bind_param("sds", $typepayment, $totalprice, $items_json);

        if ($stmt->execute()) {
            // Empty the cart after successful order
            $conn->query("DELETE FROM cart_items"); 
            header("Location: success_placed.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();

    } else {
        echo "cart is empty";
    }

    $conn->close();
}
?>