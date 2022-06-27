<?php 
  require APPROOT . '/views/includes/header.php';
  ?>
<?php echo $data["title"]; ?>

<table class="table table-hover">
  <thead>
    <th scope="col">Datum</th>
    <th scope="col">Naam Instructeur</th>
    <th scope="col">Annuleren</th>

  </thead>
  <tbody>
    <!-- hier geef je aan dat je de eerder aangeroepen data
     wat je hebt gedaan in je controller dat deze hier in je tabel moeten op je website van je overview  -->
    <?=$data['leerlings']?>
  </tbody>
</table>
<button><a href="<?=URLROOT;?>/homepages/index">terug</a></button>

<?php 
  require APPROOT . '/views/includes/footer.php';
  ?>