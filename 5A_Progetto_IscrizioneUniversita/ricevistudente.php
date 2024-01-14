<?php
// Recupera i dati dal metodo GET
$nome = $_GET['nome'];
$cognome = $_GET['cognome'];
$data_nascita = $_GET['data_nascita'];
$codice_fiscale = $_GET['codice_fiscale'];
$email = $_GET['email'];
$telefono = $_GET['telefono'];
$media_informatica = $_GET['media_informatica'];
$media_matematica = $_GET['media_matematica'];
$media_diritto = $_GET['media_diritto'];
$punteggio_diploma = $_GET['punteggio_diploma'];

// Calcola la media complessiva
$media_complessiva = ($media_informatica + $media_matematica + $media_diritto) / 3;

//Verifica Diploma o media
if ($punteggio_diploma>79) 
$verificaDiploma=true;
if ($media_complessiva >=8)
$verificaMedia=true;



// Verifica l'ammissione
//$ammesso = ($punteggio_diploma > 79) || ($media_complessiva >= 8);
$ammesso = $verificaDiploma || $verificaMedia;



// Stampa i dati ricevuti
echo "<p>Nome: $nome</p>";
echo "<p>Cognome: $cognome</p>";
echo "<p>Data di nascita: $data_nascita</p>";
echo "<p>Codice Fiscale: $codice_fiscale</p>";
echo "<p>Email: $email</p>";
echo "<p>Numero di telefono: $telefono</p>";
echo "<p>Media Informatica: $media_informatica</p>";
echo "<p>Media Matematica: $media_matematica</p>";
echo "<p>Media Diritto: $media_diritto</p>";
echo "<p>Punteggio Diploma: $punteggio_diploma</p>";
echo "<p>Media Complessiva: $media_complessiva</p>";
// Stampa la decisione sull'ammissione
if ($ammesso) {
    echo "<p>Complimenti! Sei stato ammesso alla facoltà di Informatica, per le seguenti motivazioni:</p>";

            if ($verificaDiploma) 
                echo "<p>Media diploma superiore a 79</p>";
            if ($verificaMedia)
                echo "<p>Media tra le materie principali superiore o uguale a 8</p>";

} else {
    echo "<p>Siamo spiacenti, non sei ammesso alla facoltà di Informatica. Puoi essere ammesso solo pagando.</p>";
}

?>
