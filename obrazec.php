<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spletni obrazec</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .header {
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
            <a href="seznam.php" class='link'>Seznam</a>
            <a href="aseznam.php" class='link'>Aseznam</a>
            <a href="pesniki.php" class='link'>Pesniki</a>
            <a href="dodajpesnika.php" class='link'>Dodaj Pesnika</a>
            <a href="itt.php" class='link'>ITT</a>
            <a href="barve.php" class='link'>Barve</a>
            <a href="udelezenciizobrazevanja.php" class='link'>Udel. izobr.</a>
        </div>
    </div>
    <div class="main">
        <h1>Spletni obrazec</h1>
        <p>Preberemo število</p>

        <form method="post">
            <input id="stevilo" name="stevilo">
            <input type="submit" name="potrdi" value="Potrdi!">
        </form>


        
        <?php
            
            // funkcija ki preveri ali je vneseno stevilo
            function je_stevilo($vrednost) {
                // ce je vneseno stevilo
                if (is_numeric($vrednost)) {
                    return true;
                }
                else {
                    return false;
                }
            }

            // preverimo ali je bil obrazec poslan
            if (isset($_POST['stevilo'])) {

                $p = $_POST['stevilo'];

                // preverimo ali je bilo poslano stevilo
                if (je_stevilo($p)) {   
                    // preberemo vrednost spremenljivke
                    echo '<p>Stevilo je ' . $p . '</p>';

                    // izracunamo desetkratnik
                    $d = $p * 10;
                    echo '<p>Desetkratnik je ' . $d . '</p>';
                }
                else {
                    echo 'ni stevilo';
                }
            }
        ?>
    </div>
</body>
</html>