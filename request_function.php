<?php
    if($_REQUEST["name"] || $_REQUEST["age"]){
        if(preg_match("/[^A-Za-z'-]/",$_REQUEST["name"])){
            die("Invalid Name");
        }
        if(preg_match("[/[^0-9'-]/]",$_REQUEST["age"])){
            die("Invalid age");
        }
        echo"<br>";
        echo"welcome ".$_REQUEST['name']."<br>";
        echo"your age is ".$_REQUEST['age']." years old";
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