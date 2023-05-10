<?php
ob_start()
session_start();
?>

<html>
    <head>Login</head>
<body>
        <h3>Enetr Username and Password</h3>
        <?php
            if($_POST['username']=='admin' && $_POST['password']=='Mahesh')
            {
                $_SESSION['valid']=true;
                $_SESSION['timeout']=time();
                $_SESSION['username']='admin';

                echo "Login Successfully";
            }
            else{
                echo "Enter Valid Username and Password"
            }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>
        <input type="text" name="username" value="">
        <input type="text" name="password" value="">
        </form>

        <a href = "logout.php" title="Logout">session
        </body>
        

