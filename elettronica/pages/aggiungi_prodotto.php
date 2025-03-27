<?php

$config = require '../connessione_db/db_config.php';
require '../connessione_db/DB_Connect.php';
require_once '../connessione_db/functions.php';

require_once '../strutture_pagina/functions_active_navbar.php';
require '../strutture_pagina/navbar.php';
$db = DataBase_Connect::getDB($config);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi prodotto</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <h1 class="titolo">Aggiungi prodotto</h1>

    <form action="../passaggio_dati/prodotto_ag.php" method="POST">
        <div class="form-group">
            <label for="descrizione">Descrizione</label>
            <input type="text" id="descrizione" name="descrizione" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="costo">Costo</label>
            <input type="number" id="costo" name="costo" class="form-control" required step="0.01">
        </div>

        <div class="form-group">
            <label for="quantita">Quantità</label>
            <input type="number" id="quantita" name="quantita" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="data_produzione">Data di Produzione</label>
            <input type="date" id="data_produzione" name="data_produzione" class="form-control" required>
        </div>

        <button type="submit" name="aggiungi_prodotto" class="add-to-cart-btn">Aggiungi Prodotto</button>
    </form>

    <?php
require '../strutture_pagina/footer.php';
?>

</body>
</html>
