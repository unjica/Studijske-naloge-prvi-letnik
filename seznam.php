<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seznam</title>
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
            <a href="obrazec.php" class='link'>Obrazec</a>
            <a href="aseznam.php" class='link'>Aseznam</a>
            <a href="pesniki.php" class='link'>Pesniki</a>
            <a href="dodajpesnika.php" class='link'>Dodaj Pesnika</a>
            <a href="itt.php" class='link'>ITT</a>
            <a href="barve.php" class='link'>Barve</a>
            <a href="udelezenciizobrazevanja.php" class='link'>Udel. izobr.</a>
        </div>
    </div>
    <div class="main">
        <h1>Seznam</h1>
        <p>Preberemo seznam</p>
        <form method="post">
            <input type="text" name="avtomobil">
            <input value="Dodaj" type="submit" name="dodaj">
        </form>
        
        <?php
            // deklariramo in inicializiramo seznam
            $avtomobil = array('Fico', 'Katra', 'Stoenka');

            // ce je bil obrazec poslan
            if(isset($_POST['dodaj'])) {
                // nov vnos
                $nov_avto = $_POST['avtomobil'];
                // na konec seznama dodamo nov vnos
                array_push($avtomobil, $nov_avto);
            }

            // izpisemo stevilo avtov v seznamu
            echo 'Na seznamu je ' . count($avtomobil) . ' avtomobilov <br>';

            // izpisemo seznam avtomobilov
            for($i=0; $i < count($avtomobil); $i++) {
                // izpisemo avtomobil
                echo $i+1 . '.:' . $avtomobil[$i] . '<br>';
            }
        ?>
    </div>
</body>
</html>