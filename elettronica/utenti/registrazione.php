<?php
session_start();
$config = require '../connessione_db/db_config.php';
require '../connessione_db/DB_Connect.php';
require_once '../connessione_db/functions.php';
$db = DataBase_Connect::getDB($config);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    try
    {
        // Verifica se lo username esiste già nel database
        $query_check = "SELECT COUNT(*) FROM negozio.login WHERE email = :email";
        $stmt_check = $db->prepare($query_check);
        $stmt_check->bindParam(':email', $email);
        $stmt_check->execute();

        // Controlla il numero di risultati
        $existingUser = $stmt_check->fetchColumn();

        if ($existingUser > 0)
        {
            header("Location: ../redirect/error_username.pages" );
        }
        else
        {
            $query = "INSERT INTO negozio.login (nome, cognome, email, password) 
                      VALUES (:nome, :cognome, :email, :password)";

            $stmt = $db->prepare($query);

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cognome', $cognome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hash);
            $stmt->execute();

            header("Location: ../pages/home.php");
        }
    }
    catch (PDOException $e)
    {
        logError($e);
    }
}
?>
