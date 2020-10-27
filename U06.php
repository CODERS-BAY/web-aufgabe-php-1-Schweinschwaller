<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Übungen</title>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<?php
    $normal = 1.35;
    $super = 1.40;
    $diesel = 1.10;

    if($_POST["u06kind"]=="N"){
        $help = $_POST["u06liter"] * $normal;
    }else if($_POST["u06kind"]=="S"){
        $help = $_POST["u06liter"] * $super;
    }else{
        $help = $_POST["u06liter"] * $diesel;
    }
   
    echo "<p>Das macht dann " . $help . "€</p>";   
?>
</body>
</html>