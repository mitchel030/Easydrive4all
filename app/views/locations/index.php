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
            <th scope="col">Datum les</th>
            <th scope="col">Leerling</th>
            <th scope="col">Straat</th>
            <th scope="col">Woonplaats</th>
            <th scope="col">Instructeur</th>
          </tr>
        </thead>
        <tbody>
        <?= $data["lessenrows"] ?>
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
