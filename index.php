<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Enter decimal number:
    <input type="text" name="number">
    <input type="submit" value="Convert">
</form>
<?php
include_once ("Stack.php");
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $number = $_POST["number"];
    $binary = new Stack();
   while (floor($number)>0){
       $binary->push($number%2);
       $number=$number/2;
   }
   echo "result: ".$binary->toString();
}

?>
</body>
</html>
