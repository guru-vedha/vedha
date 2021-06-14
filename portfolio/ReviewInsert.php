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
    include 'database.php';
    $connection = connectionDB();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // collect value of input field
            $name = $_REQUEST['name'];
            $position = $_REQUEST['position'];
            $company = $_REQUEST['company'];
            $rating = $_REQUEST['rating'];
            $review = $_REQUEST['review'];
            $email = $_SESSION['email'];
            $sql = "INSERT INTO `reviews`(`email`, `name`, `position`, `company`, `rating`, `review`) VALUES ('$email','$name','$position','$company','$rating','$review')";
    }
        if (mysqli_query($connection, $sql)) {
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$email\n $name\n $position\n "
                . "$company\n $rating\n $review");
            header("Location: index.php");  
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($connection);
        }

        function avgReviews(){
            include 'database.php';
            $conn = connectionDB(); //returns coonection
            $result = mysqli_query($connection, 'SELECT AVG(rating) AS rating_avg FROM reviews'); 
            $row = mysqli_fetch_assoc($result); 
            $sum = $row['rating_avg'];
                // Close connection
        mysqli_close($connection);
        return $sum;  }
        // Closing the connection.
        $connection->close();
        ?>

</body>
</html>