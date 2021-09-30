<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITT</title>
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
            <a href="/" class="home link">Domov</a>
            <a href="hello.php" class='link'>Hello</a>
            <a href="obrazec.php" class='link'>Obrazec</a>
            <a href="seznam.php" class='link'>Seznam</a>
            <a href="aseznam.php" class='link'>Aseznam</a>
            <a href="pesniki.php" class='link'>Pesniki</a>
            <a href="dodajpesnika.php" class='link'>Dodaj Pesnika</a>
            <a href="barve.php" class='link'>Barve</a>
            <a href="udelezenciizobrazevanja.php" class='link'>Udel. izobr.</a>
        </div>
    </div>
    <div class="main">
        <h1>Indeks telesne teze</h1>
        <form method="post" style="text-align: center">
            Telesna teza:
            <input name="teza"><br>
            Visina v cm:
            <input name="visina"><br>
            <input name="dodaj" type="submit" value="Dodaj">
        </form>
        <?php
            // Avtor: Sanja Malovic
            // Namen: Program ki izracuna indeks telesne teze
            // Vhodi: Telesna teza in telesna visina
            // Izhod: indeks telesne mase
            // Test: 55kg, 160cm

            // ce je bil obrazec poslan
            if(isset($_POST['dodaj'])) {
                // shranimo tezo
                $teza = $_POST['teza'];
                // shranimo visino in pretvorimo iz cm v m (/100)
                $visina = $_POST['visina'] / 100;

                // izracunamo indeks telesne teze (razmerje med telesno težo (v kilogramih) in kvadratom telesne višine (v metrih))
                $itt = $teza / ($visina * $visina);

                // izpisemo index telesne teze (zaokrozimo na eno decimal.)
                echo 'Indeks tesne teze je ' . round($itt, 1);
            }
        ?>
    </div>
</body>
</html>