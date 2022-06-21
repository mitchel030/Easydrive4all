<?php
  require APPROOT . '/views/includes/header.php';
  echo $data['title']; 
  // var_dump($data);
?>

<form action="<?= URLROOT; ?>/instructors/create" method="post">
  <table>
    <tbody>
      <tr>        
        <td>
          <label class= "form-label" for="opmerkinginstructeur">voeg een mededeling voor de instructeur</label>
          <input class="form-control" type="text" name="opmerkinginstructeur" id="opmerkinginstructeur" value="<?= $data['mededelingeninstructeurs']; ?>">
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