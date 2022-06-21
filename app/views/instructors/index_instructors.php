<?php 
// de titel dat op de index page komt (Planning Lessen)
  echo $data["title"]; 
  // dit zorg ervoor dat je header incluude is op de index page
  require APPROOT . '/views/includes/header.php';
  ?>
  <!-- dit is een tabel class voor de opmaak -->
<table class="table table-hover">
  <thead>
    <th scope="col">Instructeur Naam</th>
    <th scope="col">Knop Voor het invoegen van een opmerking</th>
  </thead>
  <tbody>
    <!-- hier worden de data die opgehaald word met $rows bij controllers/Instructors opgehaald voor in de index -->
    <?=$data['instructors']?>
  </tbody>
</table>
<button> <a href="<?= URLROOT; ?>/homepages/index">Go back</a> </button>

<?php 
// hiermee include je de footer in je index
  require APPROOT . '/views/includes/footer.php';
  ?>