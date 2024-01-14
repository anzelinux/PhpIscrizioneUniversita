<?php
// Recupera i dati dal metodo GET
$dati_studente = array(
    'nome' => $_GET['nome'],
    'cognome' => $_GET['cognome'],
    'data_nascita' => $_GET['data_nascita'],
    'codice_fiscale' => $_GET['codice_fiscale'],
    'email' => $_GET['email'],
    'telefono' => $_GET['telefono'],
    
);

$dati_risultati = array (

    'media_informatica' => $_GET['media_informatica'],
    'media_matematica' => $_GET['media_matematica'],
    'media_diritto' => $_GET['media_diritto'],
    'punteggio_diploma' => $_GET['punteggio_diploma']
);

// Calcola la media complessiva
$media_complessiva = ($dati_risultati['media_informatica'] + $dati_risultati['media_matematica'] + $dati_risultati['media_diritto']) / 3;

//Verifica Diploma o media
if ($dati_risultati['punteggio_diploma']>79) 
$verificaDiploma=true;
if ($dati_risultati['media_complessiva'] >=8)
$verificaMedia=true;



// Verifica l'ammissione

$ammesso = $verificaDiploma || $verificaMedia;



// Stampa i dati ricevuti

foreach ($dati_studente as $chiave => $valore) {

    echo "<p> $chiave: $valore";
}

foreach ($dati_risultati as $chiave2 => $valore2) {

    echo "<p> $chiave2: $valore2";
}




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
