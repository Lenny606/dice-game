<?php
require_once 'Dice.php';

$num = $_POST["number"] ?? null; 

$valid = true;
if(empty($num)) {
    $valid = false;
    echo "choose a num pls";
    
}

if (!empty($num) && !is_numeric($num)){
    $valid = false;
   
    echo "no letters pls-->";
    echo "<a href='form.php'>Go back</a>";
    exit();
}


function rollDices ($num) {
    for($i=1 ; $i <= $num; $i++){
        $dice = new Dice;
        $dice->roll();
        // var_dump($dice->rolled_side);
        echo "<p style='display:inline; padding: 5px; background-color: black; color: white'>$dice->rolled_side</p>";
    }
}


$dice = new Dice;
$dice->roll();
// var_dump($dice->rolled_side);

rollDices($num);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice</title>
</head>
<body>
    <form action="form.php" method="post">
        <input type="text" name="number" value="">
        <input type="submit" value="ROLL">
    </form>
</body>
</html>