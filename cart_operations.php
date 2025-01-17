<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('database.php');

if(!isset($_SESSION['user_id'])){
    die(json_encode(['error' => 'User Not login']));
}

$user_id = $_SESSION['user_id'];

// Handle Ajax Request
$action = $_POST['action'] ?? '';
$product_id = $_POST['product_id'] ?? 0;
$quantity = $_POST['quantity'] ?? 1;

switch($action){
    case 'add':
        addToCart($user_id, $product_id);
        break;
    case 'remove':
        removeFromCart($user_id, $product_id);
        break;
    case 'update':
        updateQuantity($user_id, $product_id, $quantity);
        break;
    case 'get':
        getCart($user_id);
        break;
    case 'get_count':
        getCartCount($user_id);
        break;
}



function getCartCount($user_id) {
    global $conn;
    
    $stmt = $conn->prepare(
        "SELECT SUM(quantity) as total_items 
         FROM cart_items 
         WHERE user_id = ?"
    );
    
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    echo json_encode([
        'count' => (int)($row['total_items'] ?? 0)
    ]);
    exit;
}

function addToCart($user_id, $product_id) {
    global $conn;

    // First check if item exists
    $stmt = $conn->prepare("SELECT id, quantity FROM cart_items WHERE user_id = ? AND product_id = ?");
    $stmt->bind_param("ii", $user_id, $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        // Update existing item
        $row = $result->fetch_assoc();
        $new_quantity = $row['quantity'] + 1;
        $stmt = $conn->prepare("UPDATE cart_items SET quantity = ? WHERE id = ?");
        $stmt->bind_param("ii", $new_quantity, $row['id']);
    } else {
        // Insert new item
        $stmt = $conn->prepare('INSERT INTO cart_items(user_id, product_id, quantity) VALUES (?, ?, 1)');
        $stmt->bind_param("ii", $user_id, $product_id);
    }

    if($stmt->execute()) {
        getCartCount($user_id); // Return the new count
    } else {
        echo json_encode(['error' => 'Failed to update cart']);
    }
    exit;
}



    function removeFromCart($user_id,$product_id){
    global $conn;

    $stmt = $conn->prepare("DELETE FROM cart_items WHERE user_id = ? AND product_id= ?");
    $stmt->bind_param("ii",$user_id,$product_id);
    $stmt->execute();

    getCart($user_id); // Return updated cart
}


function updateQuantity($user_id,$product_id,$quantity){
    global $conn;


    if($quantity < 1){
        removeFromCart($user_id,$product_id);
        return;
    }

    $stmt =$conn->prepare("UPDATE cart_items SET quantity =? WHERE user_id = ? AND product_id = ?");
    $stmt->bind_param('iii', $quantity, $user_id, $product_id);
    $stmt->execute();
    getCart($user_id);
}


// calculate total
function getCart($user_id){
    global $conn;

    $stmt = $conn->prepare(
        "SELECT c.*, r.recipename, r.price, r.recipeimage
        FROM cart_items c
        JOIN recipes r ON c.product_id = r.id
        WHERE c.user_id = ?"
    );

    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $cart_items = [];
    $total = 0;

    while($row = $result->fetch_assoc()){
        $item_total = $row['price'] * $row['quantity'];
        $total += $item_total;

        $cart_items[] = [
            'id' => $row['product_id'],
            'recipename' => $row['recipename'],
            'price' => $row['price'],
            'quantity' => $row['quantity'],
            'recipeimage' => $row['recipeimage'],
            'item_total' => $item_total
        ];
    }

    // Move this inside the function
    echo json_encode([
        'items' => $cart_items,
        'total' => $total
    ]);
}




?>