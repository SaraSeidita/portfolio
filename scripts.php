<!-- JavaScript -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="script.js"></script>


<!-- script per il contenuto sezioni gestito in modo dinamico -->
<script>
$(document).ready(function () {
    // Funzione per caricare una sezione specifica con AJAX
    function loadSection(section) {
        $.ajax({
            url: 'sezioni/' + section + '.php',  // Percorso del file da caricare, esempio home.php
            type: 'GET',                         // Tipo di richiesta, in questo caso GET perché non invio dei dati al server
            dataType: 'html',                    // Tipo di dato che ci aspettiamo. Devo ricevere l'html del contenuto
            success: function (data) {           // Funzione di successo
                $('#main-content').html(data);  // Inserisce il contenuto caricato in #main-content
                
                
                window.scrollTo({ top: 0, behavior: 'smooth' }); // Scrolla in cima
            },
            error: function (xhr, status, error) {  // Funzione in caso di errore
                console.log('Si è verificato un errore: ' + error);
                $('#main-content').html('<p>Errore nel caricamento della sezione.</p>');
            }
        });
    }

    // Carica la sezione "home" all'inizio, la sezione principale
    loadSection('home');

    // Gestisce il clic sui link del menu
    $('.nav-link').click(function (e) {
        e.preventDefault();  // Impedisce il comportamento predefinito del link

        // Estrae il nome della sezione dal link cliccato (es. "progetti", "interattivo")
        let section = $(this).attr('href').substring(1);  // "#progetti" diventa "progetti"

        // Carica la sezione corrispondente
        loadSection(section);

        // Rende attivo il link cliccato nel menu
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    });

    // Gestisce il clic sul logo per tornare alla sezione "home", altrimenti rischia che non torna a index.php con i contenuti di home.php
    $('#logo-link').click(function (e) {
        e.preventDefault();  // Impedisce il comportamento predefinito del link
        loadSection('home'); // Carica la home
        $('.nav-link').removeClass('active');
        $('.nav-link[href="#home"]').addClass('active');
    });
});
</script>
