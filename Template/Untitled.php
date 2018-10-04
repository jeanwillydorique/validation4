        <?php

        foreach ($_POST['task'] as $key => $value) {
                //var_dump($_POST['ok']);
                setcookie($key, $value, time() + 365 * 24 * 3600, null, null, false, true );
                $_COOKIE[$key] = $value; 
                echo '<li class="taskbloc">';
                echo '<input class="checkbox" type="checkbox" name="checkbox[]';
                echo '<p class="task">' .$_COOKIE[$key]. '</p>';
                echo '</li>'; }



        // créer un bouton class closed
        // créer un form avec comme input le button
        ?> 


         <form class="formulaire" method="POST" action="./todolist.php">
        <div class="titre">       
            <h2>My To Do List</h2>
            <input type="submit" class="ok" value="Envoyer !" name="ok">
        </div> 
       
                <ul class="inputbox">
                        <li><input type="text" name="task[]" placeholder="your text here..." ></li>                      
                </ul>
        <input type="button" class="plus" value="Add new task">
</form>

        