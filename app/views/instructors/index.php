<!-- // Require head include -->
<!--  -->
<?php require_once APPROOT . '\views\includes\head.php'; ?>
<div class="content col-10">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                    <div class="content col-10">
      <h1 class="text-center">Lessen</h1>
      <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th scope="col">Driving Lesson ID</th>
            <th scope="col">Driving Lesson Datum</th>
            <th scope="col">Leerling</th>
            <th scope="col">Opmerking</th>
          </tr>
        </thead>
        <tbody>
        <?= $data["rows"] ?>
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
