<?php
    session_start();

    // Verifica della presenza di un utente loggato

    if(isset($_SESSION['email'])) {
    
        $_SESSION = []; // Reset dell'array di sessione
    
     /*   if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time()-86400, '/');
            // Reset del cookie di sessione
        }*/
        session_destroy(); // Chiusura sessione
        header('Location: https://localhost/compito2/login.php'); // Reindirizzamento
        exit; // Fine script

    } else {
        header('Location: https://localhost/compito2/login.php'); // Reindirizzamento
        exit; // Fine script
    }
?>

