<?php require_once APPROOT . '\views\includes\head.php'; ?>
<div class="container">
	<div class="jumbotron">
		<form action="<?= URLROOT ?>/locations/update/<?= $data->id; ?>" method="post">
		  <div class="form-group">
		    <label>Name</label>
		    <input type="text" class="form-control" name="datumlessen" placeholder="Enter datum" value="<?= $data->datumlessen; ?>">
		  </div>
		  <div class="form-group">
		    <label>student</label>
		    <input type="text" class="form-control" name="student" placeholder="Enter student" value="<?= $data->student; ?>">
		  </div>
          <div class="form-group">
		    <label>straat</label>
		    <input type="text" class="form-control" name="straat" placeholder="Enter straat" value="<?= $data->straat; ?>">
		  </div>
          <div class="form-group">
		    <label>Woonplaats</label>
		    <input type="text" class="form-control" name="woonplaats" placeholder="Enter woonplaats" value="<?= $data->woonplaats; ?>">
		  </div>
          <div class="form-group">
		    <label>Instructeur</label>
		    <input type="text" class="form-control" name="naaminstructor" placeholder="Enter naaminstructor" value="<?= $data->naaminstructor; ?>">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>

