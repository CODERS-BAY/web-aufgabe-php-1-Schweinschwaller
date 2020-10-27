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

    if($_POST["fuelkind"]=="normal"){
        $help = $_POST["u03input"] * $normal;
    }else{
        $help = $_POST["u03input"] * $super;
    }

    echo "<p>Das macht dann " . $help . "€</p>";   
?>
</body>
</html>