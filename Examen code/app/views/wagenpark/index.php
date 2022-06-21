<?php
    require APPROOT . '/views/includes/header.php';
    echo $data["title"];
?>

    <!-- the card that shows the read function -->
 <div class="card">
  <div class="card-body">
    <table class="table table-striped">
  <thead>
<!-- list that shows the cars -->
    <tr>
      <th scope="col" width="15%;">Nummerbord</th>
      <th scope="col" width="30%;">Merk</th>
      <th scope="col" width="30%;">Type</th>
      <th scope="col" width="25%;">Instructeur</th>
    </tr>
  </thead>
  <tbody>
    <?=$data['itemData']?>
  </tbody>
</table>
  </div>
</div>

<?php
    require APPROOT . '/views/includes/footer.php';
?>