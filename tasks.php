<?php
    session_start();

    if(!isset($_SESSION['zalogowany']))
    {
        header('Location: index.php');
        exit();
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

<div id="topBar">
            <p>To Do </p> 
            <?php
                echo "<p>Hello ".$_SESSION['login']."!</p>"; 
            ?>
            <div id="LogOut">
                <a href='logout.php'>Log out</a>
            </div>
            <div id="addTask" onclick="addTask"></div>
            <div id="time"></div>
            <div id="settings"></div>
        </div>


<div id="content">
            <div id="board">
                <div class="colummn" id="NotStarted">
                    <a>Not started</a>
                </div>
                <div class="colummn" id="Started">
                    <a>Started</a>
                </div>
                <div class="colummn" id="Done">
                    <a>Done</a>
                </div>
            </div>
        </div>

</body>
</html>