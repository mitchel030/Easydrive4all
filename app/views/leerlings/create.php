<?php 
  require APPROOT . '/views/includes/header.php';
  ?>
<?php
  echo $data['title']; 
  // var_dump($data);
?>

    <table>
    <tbody>
          <tr>        
            <td>
              <label class= "form-label" for="Reden">Naam van het land</label>
              <input class="form-control" type="text" name="Reden" id="Reden" value="<?= $data['Reden']; ?>">
            </td>
          </tr>
          <tr>
            <td>
              <input type="submit" value="Verzenden">
            </td>
          </tr>
          <tr>
            <td>
            <input type="hidden" name="ID" value="<?= $data["row"]->ID; ?>">
            </td>
        </tr>
          <tr>
            <td>
              <button><a href="<?= URLROOT; ?>/countries/index">ga terug naar de overzicht</a></button>
            </td>
          </tr>
          
    </tbody>
  </table>

</form>


<?php  
  require APPROOT . '/views/includes/footer.php';
  ?>
  
  
  
  
  
                    