<?php
require_once 'db/connessione.php';

$limit = 6; // quanti progetti caricare per volta
$offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;

// Query al database
$sql = "SELECT titolo, descrizione, immagine, github, demo 
        FROM progetti_personali 
        ORDER BY id DESC 
        LIMIT $limit OFFSET $offset";

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
    // Nessun altro progetto trovato → nascondi bottone JS lato client
    echo "";
}

mysqli_close($conn);
?>

