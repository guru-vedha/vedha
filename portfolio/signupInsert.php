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
    global $ID;
    global $email;
    include 'database.php';
    $connection = connectionDB();

    if ($_POST['authProvider'] == "Google") {

        $ID = $_POST['id'];
        $email = $_POST['email'];
        $sql = "INSERT INTO signup_details VALUES('$ID','$email')";
        echo $ID;

    }
    $_SESSION["email"] = $email;
    $_SESSION["ID"] = $ID;

    if (mysqli_query($connection, $sql)) {
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n$ID\n $email");
        header("Location: http://localhost/portfolio/login1.html");  
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($connection);
    }
    $connection->close();
    ?>

</body>
</html>

