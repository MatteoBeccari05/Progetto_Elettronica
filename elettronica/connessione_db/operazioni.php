<?php
$config = require 'db_config.php';

require 'DB_Connect.php';
require_once 'functions.php';

$db = DataBase_Connect::getDB($config);




function visualizza_prodotti()
{
    $query = "select * from prodotti";
    global $db;
    try
    {
        $stm = $db->prepare($query);
        $stm->execute(); // eseguo
        echo '<table>';
        echo '<tr><th>Codice</th><th>Descrizione</th><th>Costo</th><th>Quantità</th><th>Data di Produzione</th></tr>';

        while ($prodotto = $stm->fetch())
        {
            echo '<tr>';
            echo '<td>' . $prodotto->codice . '</td>';
            echo '<td>' . $prodotto->descrizione . '</td>';
            echo '<td>' . $prodotto->costo . '</td>';
            echo '<td>' . $prodotto->quantita . '</td>';
            echo '<td>' . $prodotto->data_produzione . '</td>';
            echo '</tr>';
        }
        echo '</table>';

        $stm->closeCursor();  // chiudo la connessione
    }
    catch (Exception $eccezione)
    {
        logError($eccezione);
    }
}



function aggiungi_prodotto($descrizione, $costo, $quantita, $data_produzione)
{

    global $db;

    $sql = "INSERT INTO negozio.prodotti (descrizione, costo, quantita, data_produzione) 
            VALUES (:descrizione, :costo, :quantita, :data_produzione)";

    // Prepara la query
    $stmt = $db->prepare($sql);

    // Lega i parametri con i valori passati alla funzione
    $stmt->bindParam(':descrizione', $descrizione, PDO::PARAM_STR);
    $stmt->bindParam(':costo', $costo, PDO::PARAM_STR);
    $stmt->bindParam(':quantita', $quantita, PDO::PARAM_INT);
    $stmt->bindParam(':data_produzione', $data_produzione, PDO::PARAM_STR);

    // Esegui la query
    try
    {
        $stmt->execute();
        header('Location: ../redirect/confirm.html');

    }
    catch (Exception $eccezione)
    {
        logError($eccezione);
    }
}











?>

