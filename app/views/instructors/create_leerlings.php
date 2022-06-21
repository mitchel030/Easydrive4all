<?php
  require APPROOT . '/views/includes/header.php';
  echo $data['title']; 
  // var_dump($data);
?>

<form action="<?= URLROOT; ?>/leerlings/create" method="post">
  <table>
    <tbody>
      <tr>        
        <td>
          <label class= "form-label" for="mededelingenstudent">Voeg een mededeling voor de student</label>
          <input class="form-control" type="text" name="mededelingenstudent" id="mededelingenstudent" value="<?= $data['mededelingenstudent']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" value="Verzenden">
        </td>
      </tr>
    </tbody>
  </table>

</form>
<button> <a href="<?= URLROOT; ?>/instructors/index">Go back</a> </button>


<?php
  require APPROOT . '/views/includes/footer.php';
?>