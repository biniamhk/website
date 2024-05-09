<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><div>
   <!-- THIS SHOWS DIFFERENCE BN GET AND POST METHODS IN GET METHOD 
   ALL CONTENTS LIKE PWD AND USERNAME ARE VISSIBLE ON THE BROWSER
    <form action="index.php" method="POST">
    <label>userName</label>
    <input type="text" name="userName">
    <br><br>
    <label>password</label>
    <input type="password" name="password">
    <br>
    <input type="submit" value="Log in">
   </form> 
   </div> -->
   <form action="index.php" method="POST">
    <label>quantity</label><br>
    <input type="text" name="quantity"> <br>
    <label>price</label><br>
    <input type="text" name="price"> <br><br>
    <input type="submit" value="total"> <br>
   </form>
   <br><br><br><br>

   <form action="index.php" method="post">
    <label>Radius:</label>
    <input type="text" name="radius">
    <input type="submit" value="Calculate">
</form><br>

</body>
</html>
<?php
 $quantity=$_POST["quantity"];
 $price=$_POST["price"];
 $total=$quantity*$price;
 echo "<br>";
 $total=$quantity*$price;
 echo "you have ordered {$quantity} pizza/s <br>";
 echo "the total is : \${$total} <br> <br>";
 
 $radius=$_POST["radius"];
 $circumference=null;
 $circumference=2*pi()*$radius;
 $circumference=round($circumference,2);
 $area=round(pi()*pow($radius,2),2);
 $volume= round(4/3*pi()*pow($radius,3),2);
 echo "circumference of the circle is: {$circumference}cm<br>"; 
 echo "Area of the circle is: {$area}cm^2<br>"; 
 echo "volume of the circle is: {$volume}cm^3<br>"; 
 // switches
 $date=date("l");
 switch($date) {
    case "Monday":
        echo" the begning of the day";
        break;
    case "Tuesday":
            echo" remember unavailablity";
            break; 
    default:
    echo"you failed"; 
 }
    //for loop
    for($i=0;$i<=10;$i++){
        echo"Hello <br>";
    } 
    //
    $counter=0;
    while($counter<10){
        $counter++;
        echo "$counter <br>";
    }
    //Arrays
    $food=array("apple","bannan","orange","coconut","papaya");
    echo $food[1] ;
    // array_push() add ellement at lasst position
    // array_pop() remove last ellement in array
    //arry_shift() remove first ellement in array
    //foreach
    foreach($food as $foods){
        echo"$foods <br>";} 
        //key=values
        //array_key(capitals) gives the keys
        //array_flip()to make the keys as values and values as keys
        
        $capitals=array("USA =>Washington","Eritrea=>Asmara","Sweden=>Stockholm","India=>New Delhi");
        $keys=array_keys($capitals);
        foreach($keys as $key){
            echo "key <br>";
        }
        foreach($capitals as $key => $value){
            echo "{$key}  = {$value} <br>";
    } 
    
    echo$_SESSION["username"]. "<br>";
    echo$_SESSION["password"]. "<br>"

 ?>