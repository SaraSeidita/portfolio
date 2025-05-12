
<body>

  <div class="container mt-5">

    <!-- Navbar Tabs -->
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-category="universita" href="#">Università</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-category="personali" href="#">Personali</a>
      </li>
    </ul>

    <!-- Container per i progetti -->
    <div id="project-container" class="row mt-3">
      <!-- AJAX inserirà qui i progetti -->
    </div>

    
  </div>

  <script>
    // Quando si clicca su una delle categorie
    $('.nav-link').on('click', function(e) {
      e.preventDefault();
      let categoria = $(this).data('category');
      
      // Carica i progetti per la categoria selezionata
      $('#project-container').load(`sezioni/progetti-${categoria}.php`);
    });


    // Carica la prima categoria all'inizio
    $(document).ready(function() {
      $('#project-container').load('sezioni/progetti-universita.php');
    });
  </script>

</body>
</html>
