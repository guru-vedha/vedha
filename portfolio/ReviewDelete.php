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
    $email = $_SESSION["email"];

            // collect value of input field
        $sql = "DELETE FROM `reviews` WHERE `email` = '$email'";
        echo '<script type="text/JavaScript">','alert("Data deleted successfully");','</script>';
        if (mysqli_query($connection, $sql)) {
            header("Location: index.php");  
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($connection);
        }

        
        // Closing the connection.
        $connection->close();
        ?>

</body>
</html>