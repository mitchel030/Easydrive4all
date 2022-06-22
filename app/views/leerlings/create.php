<?php 
  require APPROOT . '/views/includes/header.php';
  ?>
<?php
  echo $data['title']; 
  // var_dump($data);
?>

<form method="post">

    <table>
    <tbody>
          <tr>        
            <td>
              <label class= "form-label" for="Reden">Voeg hier een reden van annulering</label>
              <input class="form-control" type="text" name="Reden" id="Reden" value="<?= $data['Reden']; ?>">
              <div class="errorForm"><?= $data['RedenError']; ?></div>
            </td>
          </tr>
          <tr>
            <td>
              <input type="submit" value="Verzenden">
            </td>
          </tr>
          
          <tr>
            <td>
              <button><a href="<?= URLROOT; ?>/leerlings/index">ga terug naar de les overzicht</a></button>
            </td>
          </tr>
          
    </tbody>
  </table>

</form>


<?php  
  require APPROOT . '/views/includes/footer.php';
  ?>
  
  
  
  
  
                    