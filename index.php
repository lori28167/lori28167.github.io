<?php
// Ottieni l'indirizzo IP del visitatore
$ip = $_SERVER['REMOTE_ADDR'];

// Nome del file in cui verranno registrati gli indirizzi IP
$file = 'ip.txt';

// Leggi tutti gli indirizzi IP presenti nel file
$existingIPs = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Verifica se l'indirizzo IP è già presente nel file
if (!in_array($ip, $existingIPs)) {
    // Apri il file in modalità append (aggiunta) o crea il file se non esiste
    $fp = fopen($file, 'a');

    // Scrivi l'indirizzo IP nel file seguito da una nuova riga
    fwrite($fp, $ip . "\n");

    // Chiudi il file
    fclose($fp);

    // Mostra un messaggio di conferma
    echo "Grazie per aver visitato il sito!";
} else {
    // Mostra un messaggio se l'indirizzo IP è già presente nel file
    echo "Hai già visitato questo sito.";
}
?>
