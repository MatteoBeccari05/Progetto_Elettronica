<?php
session_start();
// Configurazione del DB
$config = require '../connessione_db/db_config.php';
require '../connessione_db/DB_Connect.php';
require_once '../connessione_db/functions.php';

// Connessione al DB
$db = DataBase_Connect::getDB($config);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    try
    {
        $query = "SELECT * FROM negozio.login WHERE email = :email";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($user)
        {
            if (password_verify($password, $hash))
            {
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['nome'] = $user['nome'];
                $_SESSION['cognome'] = $user['cognome'];
                $_SESSION['ruolo'] = $user['ruolo'];

                header("Location: ../pages/home.php");
                exit;
            }
            else
            {
                header("Location: ../redirect/error_password.html");
            }
        }
        else
        {
            header("Location: ../redirect/error_password.html");
        }
    }
    catch (PDOException $e)
    {
        logError($e);
    }
}
?>
