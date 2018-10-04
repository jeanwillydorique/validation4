<?php
    echo "<link rel='stylesheet' type='text/css' href='./style.css'>";
    include('./Template/header.php');
?>
<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ADMIN PAGE</title>
</head>
<body>
    <div class="homeadmin">
            <?php
            // création des variables de session
            session_start(); 
            $_SESSION['login'] = $_POST['login'] ;
            $_SESSION['password'] = $_POST['password'] ;

            ?>
    </div> 
    <div class="apercubloc">
    <?php
            echo "Bienvue sur la page admin " .$_SESSION['login']. " " .$_SESSION['password']. " ! <br>";  
    ?>
        <form class="hidedisable" method="POST" action="./index.php">
                <label for="nom">section 1 check to visible</label>
                <input type="checkbox" name="checkbox1" value="Oui">
                <label for="nom">section 2 check to visible</label>
                <input type="checkbox" name="checkbox2" value="Non">
                <label for="nom">section 3 check to visible</label>
                <input type="checkbox" name="checkbox3" value="Peut-etre">
                <input type="submit" class="save" value="save">   
        </form>

        <?php
            include('./Template/footer.php');
        ?>
    </div> 