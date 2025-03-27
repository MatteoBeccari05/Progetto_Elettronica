<?php
require_once "../connessione_db/operazioni.php";
$descrizione = $_POST['descrizione'];
$costo = $_POST['costo'];
$quantita = $_POST['quantita'];
$data_produzione = $_POST['data_produzione'];
aggiungi_prodotto($descrizione, $costo, $quantita, $data_produzione);

?>
