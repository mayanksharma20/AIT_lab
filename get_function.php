<?php
    if($_GET["name"] || $_GET["age"]){
        if(preg_match("/[^A-Za-z'-]/",$_GET["name"])){
            die("Invalid Name");
        }
        if(preg_match("[/[^0-9'-]/]",$_GET["age"])){
            die("Invalid age");
        }
        echo"<br>";
        echo"welcome ".$_GET['name']."<br>";
        echo"your age is ".$_GET['age']." years old";
        exit();
    }
?>

<html>
    <body>
        <form action="<?php $_PHP_SELF?>" method="GET">
        Name:<input type="text" name="name"/>
        Age:<input type="text" name="age"/>
        <input type="SUBMIT"/>
    </body>
</html>