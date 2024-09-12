<?php
    session_start();
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

    <title>To Do List - Registration</title>
</head>
<body>
    <div id="container">
        <div id="topBar">
            <p>To Do</p>
        </div>
    </div>

    <div id="loginPanel">
        <form method="post">
        <h1>Register</h1>
        <br>
        <br>
        <input type="text" id="login" name="login" placeholder="Login" required>
        <br>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <br>
        
    </form>
</div>

    <script src="script.js"></script>
</body>
</html>