<?php
    //start the session
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            //set session variable
            $_SESSION["favcolor"]="green";
            $_SESSION["favanimal"]="Tiger";
            echo" Session variable are set";
        ?>
    </body>
</html>
