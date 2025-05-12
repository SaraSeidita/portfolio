<?php
require_once 'db/connessione.php';

// Query per ottenere i progetti
$sql = "SELECT titolo, descrizione, immagine, github, demo FROM progetti_personali ORDER BY id DESC LIMIT 6";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($progetto = mysqli_fetch_assoc($result)) {
        echo "
        <div class='col-md-4 mb-4'>
            <div class='card shadow-sm'>
                <img src='{$progetto['immagine']}' class='card-img-top' alt='{$progetto['titolo']}'>
                <div class='card-body'>
                    <h5 class='card-title'>{$progetto['titolo']}</h5>
                    <p class='card-text'>{$progetto['descrizione']}</p>
                    <div class='d-flex justify-content-between'>
                        <a href='{$progetto['github']}' class='btn btn-outline-primary btn-sm' target='_blank'>GitHub</a>
                        <a href='{$progetto['demo']}' class='btn btn-outline-success btn-sm' target='_blank'>Demo</a>
                    </div>
                </div>
            </div>
        </div>
        
        ";
    }
} else {
    echo "<p>Nessun progetto disponibile.</p>";
}

?>

<!-- Pulsante per caricare altri progetti -->
<button id="load-more" class="btn btn-secondary mt-4">Carica altri</button>

<script>
let offset = 6;
// Caricamento dei progetti aggiuntivi al clic del pulsante "Carica altri"
$('#load-more').on('click', function() {
    $.get('sezioni/progetti-load.php', { offset: offset }, function(data) {
      $('#project-container').append(data);
      offset += 6; // aumenta il numero di progetti caricati
    });
  });
</script>
