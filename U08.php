<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Übungen</title>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<table>
  <tr>
    <th>Spieler 1</th>
    <th>Spieler 2</th> 
  </tr>

<?php
    $player1 = 0;
    $player2 = 0;
    
    while($player1+$player2<25){
        echo "<tr>";
        $player1 += random_int(1,6);
        echo "<td>" . $player1 . "</td>";

        if($player1+$player2>=25){
            echo "<td></td>";
            echo "</tr>";
            break;
        }
        $player2 += random_int(1,6);
        echo "<td>" . $player2 . "</td>";
    }
    echo "</table>";

    echo "<p>Der Gewinner ist ";
    if($player1>$player2){
        echo "Spieler 1 mit " . $player1 . "</p>";
    }else{
        echo "Spieler 2 mit " . $player2 . "</p>";
    }
?>
</body>
</html>