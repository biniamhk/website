<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex_logincheck.php" method="post">
        <Label>Username:</Label><br>
        <input type="text" name="username"><br>
        <Label>Password:</Label><br>
        <input type="text" name="password"><br>
        <input type="submit" name="login" value="Log in">
    </form>
    
</body>
</html>
<?php  
/*foreach($_POST as $key => $value) {
echo"". $key ." : ". $value ."<br>";
}*/
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if(empty($username) || empty($password)){
      echo "username  or password is missing";
    }
      else{
        echo"Welcome $username."; 
      }

    }
?>