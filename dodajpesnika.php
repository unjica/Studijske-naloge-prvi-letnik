<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj pesnika</title>
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
            <a href="itt.php" class='link'>ITT</a>
            <a href="barve.php" class='link'>Barve</a>
            <a href="udelezenciizobrazevanja.php" class='link'>Udel. izobr.</a>
        </div>
    </div>
    <div class="main">
        <h1>Dodaj pesnika</h1>
        <form method="post" style="text-align: center">
            Ime in priimek:
            <input name="imeinpriimek"><br>
            Letnica rojstva:
            <input name="rojstvo"><br>
            Letnica smrti:
            <input name="smrt"><br>
            <input name="dodaj" type="submit" value="Dodaj">
        </form>
        <?php
            if(isset($_POST['dodaj'])) {
                // odpremo datoteko za dodajanje
                $datoteka = fopen('pesniki.csv', 'a');
                // ustvarimo vrstico
                $vrstica = "\n" . $_POST['imeinpriimek'] . ';' . $_POST['rojstvo'] . ';' . $_POST['smrt'];
                // zapisemo vrstico na konec datoteke
                fwrite($datoteka, $vrstica);
                // zapremo datoteko
                fclose($datoteka);
                // izpisemo 
                echo 'Zapis dodan <a href="pesniki.php">Nazaj</a>';
            }
        ?>
    </div>
</body>
</html>