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
    <?=$data['leerlings']?>
  </tbody>
</table>
<button><a href="<?=URLROOT;?>/homepages/index">terug</a></button>

<?php 
  require APPROOT . '/views/includes/footer.php';
  ?>