<?php
    session_start();
?>

<html>
    <body>
        <?php
            session_unset();
            // session_destroy();
            echo"All session are destroyed";
        ?>
    </body>
</html>