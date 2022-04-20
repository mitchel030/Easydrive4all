<div class="container">
	<div class="jumbotron">
		<form action="<?= URLROOT ?>/students/update/<?= $data->studentenid; ?>" method="post">
		  <div class="form-group">
		    <label>Naam</label>
		    <input type="text" class="form-control" name="naam" placeholder="Enter name" value="<?= $data->naam; ?>">
		  </div>
		  <div class="form-group">
		    <label>Studentennummer</label>
		    <input type="text" class="form-control" name="studentennummer" placeholder="Enter studentennummer" value="<?= $data->studentennummer; ?>">
		  </div>
          <div class="form-group">
		    <label>Item</label>
		    <input type="text" class="form-control" name="item" placeholder="Enter item" value="<?= $data->item; ?>">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>