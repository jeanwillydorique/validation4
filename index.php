
<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OGC NICE</title>
</head>
<body>
    <div class="menu">
        <a class="connexion" href="./loginpage.php"><input type="button" class="loginbutton" value="login"></a>
    </div>
<?php
    // on crée un cookie 
    setcookie('nom','home',time() + 365 * 24 * 3600, null, null, false, true ); 

    // on le détruit 
    if (isset($_POST['checkbox1']) || isset($_POST['checkbox2']) || isset($_POST['checkbox3'])){
        setcookie('nom','home',time() -3600 , null, null, false, true ); 
    }

    // on crée une session
    session_start(); 

    error_reporting(0);

    echo "<link rel='stylesheet' type='text/css' href='./style.css'>";
    include('./Template/header.php');

    

    if (isset($_POST['checkbox1']) || isset($_COOKIE['nom'])) { 
        echo '<section class="sec1">';
        echo '<p class="content"> Awesome</p>';
        echo '</section>';

    }
    if (isset($_POST['checkbox2']) || isset($_COOKIE['nom'])) { 
        echo '<section class="sec2">';
        echo '<p class="content"> Awesome</p>';
        echo '</section>';

    }
    if (isset($_POST['checkbox3']) || isset($_COOKIE['nom'])) { 
        echo '<section class="sec3">';
        echo '<p class="content"> Awesome</p>';
        echo '</section>';

    }


   include('./Template/footer.php');
?>