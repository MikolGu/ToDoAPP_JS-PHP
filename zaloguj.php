<?php
    session_start();
    //negro negro negro

    if((!isset($_POST['login'])) || (!isset($_POST['haslo']))){
        header('Location: index.php');
        exit();
    }
    require_once "connect.php";

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
    
    if($polaczenie->connect_errno != 0){
        echo "ERROR: ".$polaczenie->connect_errno." Opis: ".$polaczenie->connect_error;
    }

    else{
        $login = $_POST["login"];
        $haslo = $_POST["haslo"];

        $login = htmlentities($login, ENT_QUOTES, "UTF-8");
        $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");

        if($rezultat = @$polaczenie->query(
            sprintf("SELECT * FROM users WHERE login = '%s' AND haslo = '%s'", 
            mysqli_real_escape_string($polaczenie, $login),
            mysqli_real_escape_string($polaczenie, $haslo))))
        {
            $ilu_userow = $rezultat->num_rows;
            
            if($ilu_userow > 0){
                $_SESSION['zalogowany'] = true;
                
                $wiersz = $rezultat->fetch_assoc();

                $_SESSION['id'] = $wiersz['id'];

                $_SESSION['login']= $wiersz["login"];
                $_SESSION['email'] = $wiersz["e_mail"];

                
                unset($_SESSION['blad']);
                $rezultat-> free_result();
                header('Location: tasks.php');
            } else{

                $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
                header('Location: index.php');
            }
        }

        $polaczenie->close();
    }
?>
