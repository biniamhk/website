<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="filter_input.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>age:</label><br>
        <input type="text" name="age"><br>
        <label>email:</label><br>
        <input type="text" name="age"><br>               
        <input type="submit" name="login" value="login">
    </form>
    
</body>
</html>
<?php 
if(isset($_POST["login"])){
    $username = filter_input(INPUT_POST,"username",
     FILTER_SANITIZE_SPECIAL_CHARS);
     $age=filter_input(INPUT_POST,"age",
     FILTER_SANITIZE_NUMBER_INT);
     $email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
     
    echo" you name is: {$age}";
}
//cookies
setcookie("fav_food","pizza", time() +86400,"/");
foreach($_COOKIE as $key => $value) {
echo"{$key} == {$value}";
}
?>