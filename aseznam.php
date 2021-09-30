<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aseznam</title>
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
            <a href="pesniki.php" class='link'>Pesniki</a>
            <a href="dodajpesnika.php" class='link'>Dodaj Pesnika</a>
            <a href="itt.php" class='link'>ITT</a>
            <a href="barve.php" class='link'>Barve</a>
            <a href="udelezenciizobrazevanja.php" class='link'>Udel. izobr.</a>
        </div>
    </div>
    <div class="main">
        <h1>Aseznam</h1>
        <form method="post" style="text-align: center">
            Znamka:
            <input name="avtomobil"><br>
            Prevozeni km:
            <input name="km"><br>
            <input name="dodaj" type="submit" value="Dodaj">
        </form>
        <?php
            // aseznam
            $avtomobili = array('Fico' => 150000, 'Katra' => 100000, 'audi' => 200000);

            if(isset($_POST['avtomobil'])) {
                $nova_znamka = $_POST['avtomobil'];
                $novi_km = $_POST['km'];

                // dodamo nov vnos na asocijativni seznam
                $avtomobili[$nova_znamka] = $novi_km;
            }

            $st_avtov = count($avtomobili);

            echo 'Na seznamu je ' . $st_avtov . ' avtomobilov. <br>';

            foreach($avtomobili as $znamka => $km) {
                // izpisemo vsak avtomobil
                echo $znamka . ':' . $km . ' km <br>';
            }
        ?>
    </div>
</body>
</html>