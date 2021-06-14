<!DOCTYPE html>
<html>

<head>
    <title>connection page</title>
</head>

<body>
    <center>
        <?php

        function connectionDB()
        {
        $server = "127.0.0.1:3307";

        $username = "pma";

        $password = "";

        $dbname = "portfolio_reviews";

        $connection = new mysqli($server, $username, $password, $dbname);

        // if ($connection) {
        //     echo "Database Connection was successful";
        // } else {
        //     echo "Database Connection was not successful";
        //     die($connection->connect_error);
        // }
        return $connection;
        }
        
        ?>
    </center>
</body>

</html>