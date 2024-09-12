<?php 

    session_start();

    if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany'] == 'true')){
        header('Location: tasks.php');
        exit();
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>To Do List</title>
</head>
<body>
    <div id="container">
        <div id="topBar">
            <p href="index.php">To Do</p>
        </div>

        <div id="loginPanel">
            <form action="zaloguj.php" method="post">
                <h1>Login</h1>
                <br>
                <br>
                <input type="text" id="login" placeholder="login" name="login">
                <br>
                <input type="password" id="haslo" placeholder="haslo" name="haslo">
                <br>
                <br>
                <input type="submit" value="Log in">
                <br>
                <div id="register">
                    <a href="register.php">Register</a>
                </div>
                <p id="errorMsg"></p>
            </form>
        </div>

 
    </div>

    <script src="script.js"></script>
</body>
</html>