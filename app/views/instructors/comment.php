<?php require_once APPROOT . '\views\includes\head.php'; ?>
<div class="container">
	<div class="jumbotron">
		<form action="<?= URLROOT ?>/instructors/update/<?= $data->id; ?>" method="post">
		  <div class="form-group">
		    <label>Name</label>
		    <input type="text" class="form-control" name="datum" placeholder="Enter datum" value="<?= $data->datum; ?>">
		  </div>
		  <div class="form-group">
		    <label>leerling</label>
		    <input type="text" class="form-control" name="leerling" placeholder="Enter leerling" value="<?= $data->leerling; ?>">
		  </div>
          <div class="form-group">
		    <label>opmerking</label>
		    <input type="text" class="form-control" name="opmerking" placeholder="Enter outstanding" value="<?= $data->opmerking; ?>">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>

