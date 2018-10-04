
<?php
    // on crée une session
    session_start(); 


    echo "<link rel='stylesheet' type='text/css' href='./style.css'>";
    include('./Template/header.php');
?>

<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OGC NICE</title>
</head>
<body>
    <div class= "logbloc"> 
    <form class="formulaire" method="POST" action="./logpage.php">
        <input type="text" name="login" placeholder="login">
        <input type="text" name="password" placeholder="password">      
        <input type="submit" class="loginbutton" value="login">               
    </form>
    </div>

<?php
   include('./Template/footer.php');
?>