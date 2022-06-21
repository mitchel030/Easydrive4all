<!-- // Require head include -->
<?php require_once APPROOT . '\views\includes\head.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-2 p-0">
        </div>
        <!-- Content -->
        <div class="content col-10">
            <h1>Driving Lessons</h1>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                    <div class="content col-10">
      <h1 class="text-center">Driving Lessons</h1>
      <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th scope="col">Driving Lesson ID</th>
            <th scope="col">Driving Lesson Date</th>
            <th scope="col">Instructor Name</th>
          </tr>
        </thead>
        <tbody>
        <?php echo $data["requestRows"]; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
