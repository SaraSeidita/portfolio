<?php

// prossimi step
/*
1. immagine da cambiare per ogni progetto: anteprima del progetto?
2. scegliere se inserire un altro dato (demo o codice), ma basta il github
3. gestire il progetti-load per il caso progetti-personali.php in quanto non è necessario per i progetti universitari
3.1. in caso, sistemare codice ajax
*/

$progetti = [
  [
    'titolo' => 'Progetto - programmazione e progetto web',
    'descrizione' => 'Sviluppo di un sito web statico come primo progetto di programmazione, realizzato con HTML, CSS e JavaScript. L’obiettivo era apprendere la struttura base delle pagine web e l’organizzazione dei contenuti tramite linguaggi front-end.',
    'immagine' => 'assets/img/fiore.jpg', // cambiare immagine con una appropriata
    'github' => 'https://github.com/SaraSeidita/PPW-ProgettoEsame'
  ],
  [
    'titolo' => 'Progetto - Linguistica Computazionale',
    'descrizione' => 'Progetto per l’esame di Linguistica Computazionale, corso del secondo anno del CdL in Informatica Umanistica.
Sviluppo di due script in Python con l’uso della libreria NLTK per analizzare e confrontare due testi in lingua inglese.
Le funzionalità includono il parsing, l’annotazione linguistica e il calcolo di indici statistici.',
    'immagine' => 'assets/img/fiore.jpg',  // cambiare immagine con una appropriata
    'github' => 'https://github.com/SaraSeidita/LC-ProgettoEsame'
  ],
  [
    'titolo' => 'Progetto - Basi di dati e programmazione web',
    'descrizione' => 'Il progetto consiste nella creazione e gestione di un blog (simile a WordPress).',
    'immagine' => 'assets/img/fiore.jpg',  // cambiare immagine con una appropriata
    'github' => 'https://github.com/SaraSeidita/Basi_di_Dati-ProgettoEsame'
  ],
  [
    'titolo' => 'Progetto - Codifica di testi',
    'descrizione' => 'Il progetto del corso consiste nella codifica XML-TEI di un manoscritto di Ferdinand de Saussure, nella realizzazione di una edizione image-based e nel creare un foglio di stile XSL. Pubblicare il file.xml, il file.xsl, l’output.html e i file a corredo (css, javascript, le immagini delle pagine codificate, etc.)',
    'immagine' => 'assets/img/fiore.jpg',  // cambiare immagine con una appropriata
    'github' => 'https://github.com/SaraSeidita/progettoEsame-CdT'
  ],
  [
    'titolo' => 'Progetto - Tesi di laurea triennale',
    'descrizione' => 'Il progetto riguarda la trascrizione e la codifica XML-TEI di una testimonianza orale di Goti Bauer, in particolare di un’intervista realizzata dalla professoressa Marina Riccucci, per preservare e rendere consultabili i contenuti in formato digitale. Durante lo sviluppo dell’applicazione web, sono state implementate funzionalità per la consultazione dei dati, utilizzando XQuery per estrarre e visualizzare informazioni rilevanti come una mappa dei luoghi citati e una mappa che illustra gli spostamenti fatti dal testimone. L’ambiente di sviluppo per l’applicazione web è stato existDB, una piattaforma di gestione di database XML che consente l’elaborazione e la consultazione efficiente dei dati XML.',
    'immagine' => 'assets/img/fiore.jpg',
    'github' => 'https://github.com/SaraSeidita/Voci-Dall-Inferno_Progetto-TirocinioTesi'
  ],
  // ... aggiungi altri progetti se vuoi
];

foreach ($progetti as $progetto) {
  echo "
    <div class='col-md-4 mb-4'>
      <div class='card shadow-sm'>
        <img src='{$progetto['immagine']}' class='card-img-top' alt='{$progetto['titolo']}'>
        <div class='card-body'>
          <h5 class='card-title'>{$progetto['titolo']}</h5>
          <p class='card-text'>{$progetto['descrizione']}</p>
          <div class='d-flex justify-content-between'>
            <a href='{$progetto['github']}' class='btn btn-outline-primary btn-sm' target='_blank'>GitHub</a>
          </div>
        </div>
      </div>
    </div>
  ";
}
?>
