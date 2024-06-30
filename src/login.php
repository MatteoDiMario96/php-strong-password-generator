<?php 
include_once __DIR__ . '/utilities/database.php';
include __DIR__ . '/utilities/functions.php';

session_start();

$userName = $_GET['userName'] ?? null;
$passWord = $_GET['passWord'] ?? null;
$error = $_GET['error'] ?? null;
if($userName && $passWord){
    if(validationLog($userName, $passWord, $users)){
        // Aggiunge alla sessione varibali
        $_SESSION['userName'] = $userName;
        header("Location: index.php");
    }else{
        // Reindirizza nuovamente alla pagina con messaggio di errore 
        header("Location: login.php?error=login_failed");
    }
}
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header>
        <h1>
            Effettua il login
        </h1>
    </header>
    <main>
        <form action="./login.php" method="get">
            <?php if($error === 'login_failed'){ ?>
                <h5> <?php echo 'Login Fallito' ?>  </h5>
            <?php } ?> 
            <label for="userName">Username:</label>
            <input type="text" name="userName" id="userName">

            <label for="passWord">Password:</label>
            <input type="text" name="passWord" id="passWord">

            <button type="submit">
                Effettua Login
            </button>
        </form>
    </main>
</body>
</html>