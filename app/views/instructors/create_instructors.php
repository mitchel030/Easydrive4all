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
          <label class= "form-label" for="Opmerking">voeg een mededeling voor de instructeur</label>
          <input class="form-control" type="text" name="Opmerking" id="Opmerking">
        </td>
      </tr>
      <tr>
      <tr>
        <td>
          <input type="hidden" name="email" value="<?= $data["email"]; ?>">
        </td>
      </tr>
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