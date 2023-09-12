<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MatteUppgift1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Matte uppgifter</h1>
    <p>"+" för plus</p>
    <p>"-" för minus</p>
    <p>"*" för gånger</p>
    <p>"/" för delat</p>
    
    <form action="index.php" method="post">
        <label>tal 1:</label>
        <input type="text" name="x">
        <br>
        <br>
        <label>Tecken: </label>
        <input type="text" name="t">
        <br>
        <br>
        <label>tal 2:</label>
        <input type="text" name="y">

        <input type="submit">
    </form>
    <h2>Se nedan för primtal check</h2>
    <form action="index.php" method="post">
        <label >Skriv ett tal för primtal check</label>
        <input type="text" name="p">
        <input type="submit">
    </form>
</body>
</html>



<?php
$x = $_POST["x"];
$t = $_POST["t"];
$y = $_POST["y"];

switch($t){
    case "+":
        echo $x + $y; 
        break;
    case "-":
        echo $x - $y;
        break;
    case "*":
        echo $x * $y;
        break;
    case "/": 
        echo $x / $y;
        break;

}

$flag = 0;
$p = $_POST["p"];

for($i = 1; $i<=$p; $i++){
    if($p % $i == 0){
        $flag ++;
    }
    
}
if($flag == 2){
    echo " ditt tal är ett primtal ";
}
else{
    echo " ditt tal är inte ett primtal ";
}
?>

