<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form action="index.php" method="post">

        </form>
        <?php
            $host = "localhost";
            $port = "5432";
            $dbname = "test";
            $user = "postgres";
            $password = "admin";

            try {
                $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");

                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully";
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        ?>
    </body>
</html>