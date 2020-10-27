<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Übungen</title>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <header>
        <div>
            <h1 >PHP Übungen Schweinschwaller</h1>
        </div>
    </header>

    <main>
    <hr>
        <h1>Übung 1</h1>
        <div class="specification">
            <h2>Angabe:</h2>
            <p> Schreibe ein Programm das Zwischenergebnis und Endergebnis errechnet und die Artikeln ausgibt.</p>
            <p> Artikel 1: € 22,50</p>
            <p> Artikel 2: € 12,30</p>
            <p> Artikel 3: € 5,20</p>
            <p> Nettosumme: ??</p>
            <p> Umsatzsteuer 20%: ??</p>
            <p> Bruttosumme: ??</p>
        </div>
        <hr>
        <?php
            $artikel1Preis = 22.50;
            $artikel2Preis = 12.30;
            $artikel3Preis =  5.20;
            $waehrung = "€";

            echo "<p>Artikel 1: $waehrung $artikel1Preis </p>";
            echo "<p>Artikel 2: $waehrung $artikel2Preis </p>";
            echo "<p>Artikel 3: $waehrung $artikel3Preis </p>";
            echo "<br>";

            echo "<p>Nettosumme: $waehrung " . ($artikel1Preis+$artikel2Preis+$artikel3Preis) . "</p>";
            echo "<p>Umsatzsteuer 20%: $waehrung " . ($artikel1Preis+$artikel2Preis+$artikel3Preis)*0.2 . "</p>";
            echo "<p>Bruttosumme: $waehrung " . ($artikel1Preis+$artikel2Preis+$artikel3Preis)*1.2 . "</p>";
            echo "<hr>";
        ?>
        <hr>
        <h1>Übung 2</h1>
        <div class="specification">
            <h2>Angabe:</h2>
            <p>
            Erstelle ein Eingabeformular und ein dazu passendes PHPProgramm, mit dessen Hilfe das Quadrat einer Zahl berechnet werden kann.
            Die Zahl soll also mit sich selbst multipliziert werden. 
            Vergiss nicht, die eingegebene Zeichenkette in eine Zahl umzuwandeln
            </p>
        </div>
        <hr>
       
        <form action = "U02.php" method = "post">
        <label for="u02input" class="txt">Quadrat der Zahl</label>
        <input name="u02input" size="4">
        <input type="submit">
        </form>

        <hr>
        <hr>
        <h1>Übung 3</h1>
        <div class="specification">
            <h2>Angabe:</h2>
            <p>
            Erstelle ein Eingabeformular und ein dazu passendes PHP-Programm. 
            Es soll den Preis für eine Tankfüllung berechnet werden.
            Es gibt zwei Sorten Benzin: Normal (Preis: 1,35 €) und Super (Preis: 1,40 €)
            </p>
        </div>
        <hr>
        
        <form action = "U03.php" method = "post">
        <label for="u03input" class="txt">getankte liter</label>
        <input name="u03input" size="4">
        <label for="normal" class="txt">Normal</label>
        <input type="radio" name="fuelkind" value="normal" id="normal">
        <label for="super" class="txt">Super</label>
        <input type="radio" name="fuelkind" value="super" id="super">
        <input type = "submit">
        </form>

        <hr>
        <hr>
        <h1>Übung 4</h1>
        <div class="specification">
            <h2>Angabe:</h2>
            <p>
            Der Benutzer gibt im ersten Eingabefeld die getankte Literzahl und im zweiten entweder ein großes N oder ein großes S ein. 
            Das PHPProgramm ermittelt in Abhängigkeit von der Sorte und der getankten Menge den zu zahlenden Betrag. 
            Es wird davon ausgegangen, dass der Benutzer keine Fehleingaben macht.
            </p>
        </div>
        <hr>

        <form action = "U04.php" method = "post">
        <label for="u04input" class="txt">getankte liter</label>
        <input name="u04liter" size="4">
        <label for="u04input" class="txt">N(für normal) S(für super)</label>
        <input name="u04kind" size="4">
        <input type="submit">
        </form>

        <hr>
        <hr>
        <h1>Übung 5</h1>
        <div class="specification">
            <h2>Angabe:</h2>
            <p>
            Erweitere die vorherige Übung. 
            Großkunden, die 100 Liter oder mehr tanken, erhalten unabhängig von der Sorte an dieser Tankstelle 2% Rabatt. 
            Falls der Benutzer beispielsweise eingibt, dass er 120 Liter Normal Benzin tankt sollte die Ausgabe des Programms dies auch berechnen.
            </p>
        </div>
        <hr>

        <form action = "U05.php" method = "post">
        <label for="u05input" class="txt">getankte liter</label>
        <input name="u05liter" size="4">
        <label for="u05input" class="txt">N(für normal) S(für super)</label>
        <input name="u05kind" size="4">
        <input type = "submit">
        </form>
        
        <hr>
        <hr>
        <h1>Übung 6</h1>
        <div class="specification">
            <h2>Angabe:</h2>
            <p>
            Erweitere das Programm der Übung 5. 
            Nun soll der Preis für eine Tankfüllung ohne Rabatt für Großkunden berechnet werden. 
            Es gibt drei Sorten Benzin:
            </p>
            <p>Normal (Preis: 1,35 €)</p>
            <p>Super (Preis: 1,40 €)</p>
            <p>Diesel (Preis: 1,10 €)</p>
        </div>
        <hr>

        <form action="U06.php" method = "post">
        <label for="u06input" class="txt">getankte liter</label>
        <input name="u06liter" size="4">
        <label for="u06input" class="txt">N(für normal) S(für super) D(für Diesel)</label>
        <input name="u06kind" size="4">
        <input type="submit">
        </form>

        <hr>
        <hr>
        <h1>Übung 7</h1>
        <div class="specification">
            <h2>Angabe:</h2>
            <p>
            Schreibe ein Programm, in dem mithilfe verschiedener for-Schleifen (siehe Folie 51 von E 12 – PHP) die angegebenen Zeilen ausgeben. 
            Tipp: für die letzte Zahlenreihe wird auch eine zusätzliche Verzweigung mit if benötigt Angegebene ZEILEN: </p>
            <p>13 17 21 25 29 </p>
            <p>2 1.5 1 0.5 0 -0.5 -1</p>
            <p>2000 3000 4000 5000 6000</p>
            <p>Z5 Z7 Z9 Z11 Z13</p>
            <p>a b1 a b2 a b3</p>
            <p>c2 c3 c12 c13 c22 c23</p>
            <p>13 17 21 33 37 41 45</p>
        </div>
        <hr>

        <?php
        $help = 9;
        echo "<p>";
        for ($i = 0; $i < 5; $i++) {
            $help += 4;
            echo $help . " ";
        }
        echo "</p>";

        $help = 2.5;
        echo "<p>";
        for ($i = 0; $i < 7; $i++) {
            $help -= 0.5;
            echo $help . " ";
        }
        echo "</p>";

        $help = 1000;
        echo "<p>";
        for ($i = 0; $i < 5; $i++) {
            $help += 1000;
            echo $help . " ";
        }
        echo "</p>";

        $help = 3;
        echo "<p>";
        for ($i = 0; $i < 5; $i++) {
            $help += 2;
            echo "Z" . $help . " ";
        }
        echo "</p>";

        $help = 0;
        echo "<p>";
        for ($i = 0; $i < 3; $i++) {
            $help += 1;
            echo "a b" . $help . " ";
        }
        echo "</p>";

        
        echo "<p>";
        for ($i = 0; $i < 30; $i++) {
            if($i==2||$i==3||$i==12||$i==13||$i==22||$i==23){
                echo "c" . $i . " ";
            }
        }
        echo "</p>";
        
        echo "<p>";
        for ($i = 10; $i < 46; $i++) {
            if($i==13||$i==17||$i==21||$i==33||$i==37||$i==41||$i==45){
                echo $i . " ";
            }
            
        }
        echo "</p>";
        ?>

        <hr>
        <hr>
        <h1>Übung 8</h1>
        <div class="specification">
            <h2>Angabe:</h2>
            <p>
            Erstelle ein kleines Computerspiel. 
            Zwei Spieler würfeln mithilfe des Zufallszahlengenerators gegeneinander. 
            Die Würfe jedes Spielers sollen addiert werden. 
            Sobald einer der beiden Spieler oder beide Spieler nach einer Spielrunde den Wert 25 erreicht oder überschritten haben, ist das Spiel zu Ende. 
            Der Gewinner ist der Spieler mit der höheren Punktzahl. 
            Seine Nummer soll anschließend ausgegeben werden. 
            </p>
        </div>
        <hr>
        <form action = "U08.php" method = "post">
        <input type = "submit" value="Spielen">
        </form>
    </main>
</body>
</html>