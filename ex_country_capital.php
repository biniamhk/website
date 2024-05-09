<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex_country_capital.php" method="post">
        <label>Enter a country</label><br>
        <input type="text" name="country"><br>
        <input type="submit">
    </form>
    
</body>
</html>
<?php
$capitals=array("USA" => "Washington",
                "Eritrea"=>"Asmara",
                "Sweden"=>"Stockholm",
                "India"=>"New Delhi");
    $capital=$capitals[$_POST["country"]]; 
    echo"$capital";        

?>