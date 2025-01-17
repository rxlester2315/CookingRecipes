<?php

include('database.php');


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){


$recipeName = $_POST['recipename'];
$description = $_POST['description'];
$ingredients = [];
$typeofdishs = $_POST['typeofdish'];
$dishdescript = $_POST['dishdescription'];
$price = $_POST['price'];


if(!empty($_POST['one'])) $ingredients[] = $_POST['one'];
if(!empty($_POST['two'])) $ingredients[] = $_POST['two'];
if(!empty($_POST['three'])) $ingredients[] = $_POST['three'];

// Loop through POST data to get ingredients
foreach($_POST as $key => $value){
    if(strpos($key, 'ingredients_') === 0){
        $ingredients[] = $value;
        
    }
}
$ingredientsserialized = serialize($ingredients);



// Handle Image yay
 $imagePath = null; 
$target_dir = "uploads/";
$targetfile = $target_dir . basename($_FILES["recipeimage"]["name"]);
$uploadOk = true;


// check niya if image upload
if(isset($_FILES["recipeimage"])){
    
    $check = getimagesize($_FILES["recipeimage"]["tmp_name"]);
    if($check === false){
        echo "File is not an image.";
        $uploadOk = false;
    }
}


// files location nung image

if($uploadOk && move_uploaded_file($_FILES["recipeimage"]["tmp_name"],$targetfile)){
    $imagePath = $targetfile;
}

 } else {
        echo "There was an error uploading your file.";
        $imagePath = null;
    }




// connect to database



$stmt = $conn->prepare("INSERT INTO recipes (recipename, recipedescript, recipeimage, ingredients ,typeofdish ,descriptiondish,price) VALUES (?, ?, ?, ?,?,?,?)");
    $stmt->bind_param("ssssssi", $recipeName, $description, $imagePath, $ingredientsserialized,$typeofdishs,$dishdescript,$price);


 if ($stmt->execute()) {
        echo "Recipe added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }



    $stmt->close();
    $conn->close();


    header("Location: addrecipe.php");
?>