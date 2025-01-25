<?php 

include('database.php');


if($conn->connect_error){
    die("Connection failed:" .$conn->connect_error);

}


if($_SERVER ['REQUEST_METHOD'] == 'POST' && isset($_POST ['submit'])){



$desertname = $_POST['desertname'];

$description = $_POST['descriptions'];
$ingredients = [];
$typeofdesert = $_POST['typeofdeserts'];
$aboutdesert = $_POST['aboutdeserts'];
$price = $_POST['price'];


if(!empty($_POST['one'])) $ingredients[] = $_POST['one'];
if(!empty($_POST['two'])) $ingredients[] = $_POST['two'];
if(!empty($_POST['three'])) $ingredients[] = $_POST['three'];




foreach($_POST as $key => $value){

    if(strpos($key, 'ingredients_') === 0 ){
        $ingredients[] = $value;

    }


}
$ingredientsserialized = serialize($ingredients);



$imagePath = null;
$target_dir = "uploads/";
$targetfile = $target_dir.basename($_FILES["desertimage"]["name"]);
$uploadOK = true;



if(isset($_FILES["desertimage"])){


    $check = getimagesize($_FILES["desertimage"] ["tmp_name"]);

    if($check === false){
        echo "File is not an image.";
        $uploadOK = false;
    }
}



if($uploadOK && move_uploaded_file($_FILES ["desertimage"]["tmp_name"],$targetfile)){
    $imagePath = $targetfile;
}
else {
    echo "There was an error uploading your files";

    $imagePath = null;

}




}



$stmt = $conn ->prepare("INSERT INTO deserts (desertname,desertimage,description,typeofdesert,aboutdesert,price,ingredients) VALUES(?,?,?,?,?,?,?)");
$stmt->bind_param("sssssis",$desertname,$imagePath,$description,$typeofdesert,$aboutdesert,$price,$ingredientsserialized,);




if($stmt->execute()){
    echo "Recipe added Successfully!";
}else {
    echo "Error:". $stmt->error;
}

$stmt->close();
$conn->close();


   header("Location: adddesert.php");

?>