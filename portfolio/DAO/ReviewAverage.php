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
        $result = mysqli_query($conn, 'SELECT AVG(rating) AS rating_avg FROM reviews'); 
        $row = mysqli_fetch_assoc($result); 
        $avg = $row['rating_avg'];

          // Close connection
     mysqli_close($conn);
    ?>
</body>
</html>