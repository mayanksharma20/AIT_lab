<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            echo"Favourite color is ".$_SESSION["favcolor"]."<br>";
            echo"Favourite Animal is ".$_SESSION["favanimal"]."<br>";
        ?>
    </body>
</html>