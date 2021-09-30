<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barve</title>
    <style>
        table * {
            border: 1px solid #000;
        }
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
            <a href="obrazec.php" class='link'>Obrazec</a>
            <a href="seznam.php" class='link'>Seznam</a>
            <a href="aseznam.php" class='link'>Aseznam</a>
            <a href="pesniki.php" class='link'>Pesniki</a>
            <a href="dodajpesnika.php" class='link'>Dodaj Pesnika</a>
            <a href="itt.php" class='link'>ITT</a>
            <a href="udelezenciizobrazevanja.php" class='link'>Udel. izobr.</a>
        </div>
    </div>
    <div class="main">
        <h1>Barve</h1>
        <form method="post" style="text-align: center">
            Rdeca od 1 do 255:
            <input name="rdeca"><br>
            Modra od 1 do 255:
            <input name="modra"><br>
            <input name="dodaj" type="submit" value="Dodaj">
        </form>
        <table style="text-align: center;">
            <tr>
                <td>Rdeca</td>
                <td>Zelena</td>
                <td>Modra</td>
                <td>Koncna barva</td>
            </tr>
        <?php
            // Avtor: Sanja Malovic
            // Namen: Program ki izracuna indeks telesne teze
            // Vhodi: Rdeca in modra barva
            // Izhod: barva
            // Test: 155, 255
            
            // ce je bil obrazec poslan
            if(isset($_POST['dodaj'])) {
                // shranimo rdeco
                $rdeca = $_POST['rdeca'];
                // shranimo modro
                $modra = $_POST['modra'];
                // preverimo ali sta rdeca ali crne manjse kot 15, saj bi v tem primeru rdeca ali modra v css-u imele samo eno stevilko, in zato se barva ne bi izpisala
                if ($rdeca<15) {
                    $rdecaHex = '0' . dechex($rdeca);
                } else {
                    $rdecaHex = dechex($rdeca);
                }
                if ($modra<15) {
                    $modraHex = '0' . dechex($modra);
                } else {
                    $modraHex = dechex($modra);
                }
                // izpisemo tabelo in konvertamo stevila v hexadecimal za barvo
                echo '<tr><td>' . $rdeca .'</td><td> 00 </td><td> ' . $modra . ' </td><td style="background-color: #' . $rdecaHex . '00' . $modraHex . '">#' . $rdecaHex . '00' . $modraHex . '</td></tr>';          
            }   
        ?>
    </div>
    </table>
</body>
</html>