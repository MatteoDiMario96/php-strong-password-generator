<?php 
require_once './utilities/database.php';
require_once './utilities/functions.php';

session_start();


?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvenuto!</title>
</head>
<body>
    <main>
        <section>
            <h1>
                Bentornato <?php echo $_SESSION['userName']; ?>
            </h1>

            <a href="./logout.php">Logout</a>
        </section>
    </main>
</body>
</html>
