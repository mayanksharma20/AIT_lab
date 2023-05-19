<?php
    if($_POST["name"] || $_POST["age"]){
        if(preg_match("/[^A-Za-z'-]/",$_POST["name"])){
            die("Invalid Name");
        }
        if(preg_match("[/[^0-9'-]/]",$_POST["age"])){
            die("Invalid age");
        }
        echo"<br>";
        echo"welcome ".$_POST['name']."<br>";
        echo"your age is ".$_POST['age']." years old";
        exit();
    }
?>

<html>
    <body>
        <form action="<?php $_PHP_SELF?>" method="POST">
        Name:<input type="text" name="name"/>
        Age:<input type="text" name="age"/>
        <input type="SUBMIT"/>
    </body>
</html>