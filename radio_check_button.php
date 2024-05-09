<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio_check_button.php" method="post">
        <input type="radio" name="creditcard" value="Visa">Visa<br>
        <input type="radio" name="creditcard" value="Mastercard">Mastercard<br>
        <input type="radio" name="creditcard" value="American Express">American Express<br>
        <input type="submit" name="confirm" value="confirm"><br>
    </form>
    <br><br>
    <form action="radio_check_button.php" method="post">
        <input type="checkbox" name="piza" value="Pizza">Pizza<br>
        <input type="checkbox" name="hamburger" value="hamburger">Hamburger<br>
        <input type="checkbox" name="engera" value="enger">Engera<br>
        <input type="checkbox" name="pasta" value="Pasta">Pasta<br>        
        <input type="submit" name="submit"><br>
    </form>
    
</body>
</html>
<?php
function happy_birthday($first_name,$age) {
    echo"Hapy birthday dear {$first_name} <br>";
    echo"Hapy birthday to you <br>";
    echo"Hapy birthday dear {$first_name} <br>";
    echo"you are {$age} years old <br>";

}
function check_number($a){
    if($a%2== 0) {
        return "even";
    }
    else {
        return "odd";
    }
} 
if(isset($_POST["confirm"])){ 
    $credit_card=null;
    if(isset($_POST["creditcard"])){
        $credit_card=$_POST["creditcard"];
    
    }
     switch($credit_card){
        case "Visa":
            echo"You selected Visa";
            break;
        case "Mastercard":
            echo"You selected Mastercard";
            break;
        case "American Express":   
             echo"You selected American express";
             break;

        default:
        echo" please make a selection. ";
    }
}
//checkbox
if(isset($_POST["submit"])){
$fast_food=null;
if(isset($_POST["piza"])){
    echo"Yo like Pizzaaa!<br>";
}
if(isset($_POST["hamburger"])){
echo"You like Engera!<br>";
}
if(empty($_POST["pasta"])){
    echo"You dont like Pasta";
}
}
happy_birthday("Noah",12);
happy_birthday("Mary",6);
happy_birthday("Edu",33);
$message=check_number(11);
echo" The number is : $message <br>";
//string functions
$username="Biniam";
$username=strtolower($username);
//adding 13 0s after name
$username=str_pad($username,13,"0",);
echo "$username";
?>