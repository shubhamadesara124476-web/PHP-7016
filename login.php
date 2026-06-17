<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <h1>Student Login</h1>
    <form action ="welcome.php" method ="post">
        User name : <input type="text" name ="username"><br><br>
        Password : <input type="password" name ="password"><br><br>
        <input type="Submit">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"]=='POST')
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        if($username == "admin" && $password == "1234"){
            header("Location: welcome.php");
        }
        else{
            echo " Login Failed";
        }
    }
?>
