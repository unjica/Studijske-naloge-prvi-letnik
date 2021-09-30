<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seznam pesnikov</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .header {
            position: sticky;
            top: 0;
            width: 100vw;
            height: 100px;
            background-color: #251423;
        }
        .container {
            height: 100%;
            max-width: 1000px;
            margin: auto;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .link {
            text-decoration: none;
            color: #bebebe;
            padding: 5px 10px;
            text-transform: uppercase;
            transition: .3s;
        }
        .link:hover {
            background-color: rgba(255,255,255,.5);
        }
        .home {
            background-color: #bebebe;
            color: #251423;
        }
        
        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 50px;
        }
        .main * {
            margin: 20px 0;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class='container'>
            <a href="/" class='home link'>Domov</a>
            <a href="hello.php" class='link'>Hello</a>
            <a href="obrazec.php" class='link'>Obrazec</a>
            <a href="seznam.php" class='link'>Seznam</a>
            <a href="aseznam.php" class='link'>Aseznam</a>
            <a href="dodajpesnika.php" class='link'>Dodaj Pesnika</a>
            <a href="itt.php" class='link'>ITT</a>
            <a href="barve.php" class='link'>Barve</a>
            <a href="udelezenciizobrazevanja.php" class='link'>Udel. izobr.</a>
        </div>
    </div>
    <div class="main">
        <h1>Seznam pesnikov</h1>
        <p><a href="dodajpesnika.php">Dodaj novega</a></p>

        <?php
            // odpremo datoteko pesnikov za branje
            // ustvarimo spremenljivko s kazalcem na datoteko
            $datoteka = fopen('pesniki.csv', 'r');

            // vpisemo glavo tabele
            echo '<table border="1">';


            // gremo po vseh vrsticeh
            // beremo datoteko, dokler ne pridemo do konca datoteke
            while(!feof($datoteka)) {
                // preberemo vrstico in premaknemo kazalec naprej
                $vrstica = fgetss($datoteka);
                // razbijemo vrstico v seznamu
                $pesnik = explode(';', $vrstica);
                // izpisemo vrstico
                echo '<tr>';
                echo '<td> ' . $pesnik[0] . '</td>';
                echo '<td> ' . $pesnik[1] . '</td>';
                echo '<td> ' . $pesnik[2] . '</td>';
                echo '</tr>';
            }

            // vpisemo nogo tabele
            echo '</table>';

            // zapremo
            fclose($datoteka);

        ?>
    </div>
</body>
</html>