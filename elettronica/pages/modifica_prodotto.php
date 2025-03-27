<?php
$config = require '../connessione_db/db_config.php';
require '../connessione_db/DB_Connect.php';
require_once '../connessione_db/functions.php';
$db = DataBase_Connect::getDB($config);

// Gestione della modifica del prezzo
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modifica_prezo']) && isset($_POST['codice'])) {
    $nuovo_costo = $_POST['costo'];
    $codice = $_POST['codice'];

    $query = "UPDATE prodotti SET costo = :costo WHERE codice = :codice";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':costo', $nuovo_costo);
    $stmt->bindParam(':codice', $codice);
    $stmt->execute();
}

// Gestione dell'eliminazione di un prodotto
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['elimina']) && isset($_POST['codice'])) {
    $codice = $_POST['codice'];

    $query = "DELETE FROM prodotti WHERE codice = :codice";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':codice', $codice);
    $stmt->execute();
}

// Gestione della modifica della quantità
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modifica_quantita']) && isset($_POST['codice_quantita']) && isset($_POST['quantita'])) {
    $codice = $_POST['codice_quantita'];
    $quantita = $_POST['quantita'];

    $query = "UPDATE prodotti SET quantita = :quantita WHERE codice = :codice";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':quantita', $quantita);
    $stmt->bindParam(':codice', $codice);
    $stmt->execute();
}

// Recupero di tutti i prodotti
$query = "SELECT * FROM prodotti";
$stmt = $db->prepare($query);
$stmt->execute();
$prodotti = $stmt->fetchAll(PDO::FETCH_ASSOC);

require_once '../strutture_pagina/functions_active_navbar.php';
require '../strutture_pagina/navbar.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Prodotti</title>
    <link rel="stylesheet" href="../style/gestione.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1 class="titolo">Gestione Prodotti</h1>

<!-- Tabella prodotti -->
<div class="container mt-4">
    <div class="content">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Codice</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Costo</th>
                <th scope="col">Quantità</th>
                <th scope="col">Data di Produzione</th>
                <th scope="col">Azioni</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($prodotti as $prodotto): ?>
                <tr>
                    <td><?php echo htmlspecialchars($prodotto['codice']); ?></td>
                    <td><?php echo htmlspecialchars($prodotto['descrizione']); ?></td>
                    <td><?php echo htmlspecialchars($prodotto['costo']); ?> €</td>
                    <td>
                        <form action="" method="POST" style="display:inline;">
                            <input type="hidden" name="codice_quantita" value="<?php echo $prodotto['codice']; ?>">
                            <input type="number" name="quantita" value="<?php echo $prodotto['quantita']; ?>" min="0" required>
                            <button type="submit" name="modifica_quantita" class="btn btn-warning btn-sm">Modifica Quantità</button>
                        </form>
                        <br>
                    </td>
                    <td><?php echo htmlspecialchars($prodotto['data_produzione']); ?></td>
                    <td>
                        <!-- Modifica Prezzo -->
                        <form action="" method="POST" style="display:inline;">
                            <input type="hidden" name="codice" value="<?php echo $prodotto['codice']; ?>">
                            <input type="number" name="costo" value="<?php echo $prodotto['costo']; ?>" step="0.01" required>
                            <button type="submit" name="modifica_prezo" class="btn btn-warning btn-sm">Modifica Prezzo</button>
                        </form>

                        <!-- Elimina -->
                        <form action="" method="POST" style="display:inline;">
                            <input type="hidden" name="codice" value="<?php echo $prodotto['codice']; ?>">
                            <button type="submit" name="elimina" class="btn btn-danger btn-sm" onclick="return confirm('Sei sicuro di voler eliminare questo prodotto?');">Elimina</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require '../strutture_pagina/footer.php';
?>

</body>
</html>
