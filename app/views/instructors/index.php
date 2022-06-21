<?php 
// de titel dat op de index page komt (Planning Lessen)
  echo $data["title"]; 
  // dit zorg ervoor dat je header incluude is op de index page
  require APPROOT . '/views/includes/header.php';
  ?>
  <!-- dit is een tabel class voor de opmaak -->
<table class="table table-hover">
  <thead>
    
    <th scope="col">Instructeur</th>
    <th scope="col">Klant Voornaam</th>
    <th scope="col">Tussenvoegsel</th>
    <th scope="col">Achternaam</th>
    <th scope="col">Ophaaladres</th>
    <th scope="col">Datum</th>
    <th scope="col">Tijd</th>

  </thead>
  <tbody>
    <!-- hier worden de data die opgehaald word met $rows bij controllers/Instructors opgehaald voor in de index -->
    <?=$data['instructors']?>
  </tbody>
</table>
<!-- dit is een link die terug verwijst naar de homepage -->
<button> <a href="<?= URLROOT; ?>/homepages/index">Go back</a> </button>

<?php 
// hiermee include je de footer in je index
  require APPROOT . '/views/includes/footer.php';
  ?>