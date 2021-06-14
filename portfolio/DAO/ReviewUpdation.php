<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
  include '../database.php';
  $conn = connectionDB(); //returns coonection

  if(isset($_SESSION["email"])){
    $email = $_SESSION["email"];
    $name = $_POST["name"];
    // $email = $_POST['email'];
    $position = $_POST["position"];
    $company = $_POST["company"];
    $review = $_POST["review"];
    $rating =  $_POST["rating"];

  }else{
    $name = $_POST['name'];
    // $email = $_POST['email'];
    $review = $_POST['review'];
    $rating = $_POST['rating'];

  } 




  //inserting the recommendations 
  $updaterating = "UPDATE `reviews` SET `name`='$name',`position`='$position',`company`='$company',`rating`='$rating',`review`='$review' WHERE `email` = '$email'" ;

  if(mysqli_query($conn, $updaterating)){
    header("location: ../index.php");    
  } else{
    echo "ERROR: Could not able to execute $updaterating. " . mysqli_error($conn);
  } 

    // Close connection
    mysqli_close($conn);
    ?>
    
</body>
</html>