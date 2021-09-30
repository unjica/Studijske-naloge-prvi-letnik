<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udelezenci izobrazevanja</title>
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
            <a href="pesniki.php" class='link'>Pesniki</a>
            <a href="dodajpesnika.php" class='link'>Dodaj Pesnika</a>
            <a href="itt.php" class='link'>ITT</a>
            <a href="barve.php" class='link'>Barve</a>
        </div>
    </div>
    <div class="main">
        <h1>Udelezenci izobrazevanja</h1>
        <form method="post">
            <input type="submit" value="Prikazi" name="prikazi">
        </form>
        <?php
            // Avtor: Sanja Malovic
            // Namen: Program ki izpise udelezence, izracuna pov. oceno in doda nove udelezence
            // Vhodi: Novi udelezenec
            // Izhod: Udelezenci, pov. ocena
            // Test: test, test@gmail.com, 10

            // deklariramo spremenljivke za pov. oceno
            $povOcena = 0;
            $i = 0;
            if (isset($_POST['prikazi'])) {
                // odpremo datoteko udelezencev za branje
                // ustvarimo spremenljivko s kazalcem na datoteko
                $datoteka = fopen('udelezenci.csv', 'r');
                // vpisemo glavo tabele
                echo '<table border="1">';
                // gremo po vseh vrsticeh
                // beremo datoteko, dokler ne pridemo do konca datoteke
                while(!feof($datoteka)) {
                    // preberemo vrstico in premaknemo kazalec naprej
                    $vrstica = fgetss($datoteka);
                    // razbijemo vrstico v seznamu
                    $udelezenec = explode(';', $vrstica);
                    // izpisemo vrstico
                    echo '<tr>';
                    echo '<td> ' . $udelezenec[0] . '</td>';
                    echo '<td> ' . $udelezenec[1] . '</td>';
                    echo '<td> ' . $udelezenec[2] . '</td>';
                    echo '</tr>';
                    // za pov. oceno
                    $povOcena = $povOcena + $udelezenec[2];
                    $i++;
                }
                // vpisemo nogo tabele
                echo '</table>';
                // zapremo
                fclose($datoteka);
                // izpisemo pov. oceno
                echo 'Povprecna ocena je ' . round($povOcena / $i, 2);
            }
            ?>
    </div>
    <div class="main">
        <h1>Dodaj novega udelezenca</h1>
        <form method="post" style="text-align: center">
            Ime in priimek:
            <input name="imeinpriimek"><br>
            Elektronski naslov:
            <input name="email"><br>
            Ocena:
            <input name="ocena"><br>
            <input name="dodaj" type="submit" value="Dodaj">
        </form>
        <?php
            if(isset($_POST['dodaj'])) {
                // odpremo datoteko za dodajanje
                $datoteka = fopen('udelezenci.csv', 'a');
                // ustvarimo vrstico
                $vrstica = "\n" . $_POST['imeinpriimek'] . ';' . $_POST['email'] . ';' . $_POST['ocena'];
                // zapisemo vrstico na konec datoteke
                fwrite($datoteka, $vrstica);
                // zapremo datoteko
                fclose($datoteka);
                // izpisemo 
                echo 'Zapis dodan';
            }
        ?>
    </div>
</body>
</html>