<?php include "db.php"?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <title>login page</title>
</head>
<body>
    <form method="POST">
        EMAIL:<input type="email" name="email" id="email"><br>
        PASSWORD:<input type="password" name="password" id="password"><br>
        <button type="submit" name="login">login</button>
    </form>
    <?php
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql="SELECT * FROM user where email='$email' and password='$password'";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            header("Location:view.php");
            exit();
        }

        else{
            alart("invaild login");
        }
    }
    
    
    ?>
</body>
</html>