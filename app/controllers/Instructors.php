<?php
class Instructors extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Instructor');
  }

  public function index()
        {   // Initiate viewLeerling function in models/Leerling.php and put the result in $LeerlingIndexOverview
            $leerlingdata = $this->userModel->getData();
            // Declare leerlingRows variable as a string
            $leerlingRow = "";
            // For each row, write a HTML row with data
            foreach ($leerlingdata as $as) {
              $leerlingRow .= "<tr>";
              $leerlingRow.= "<th scope='row'>" . $as->id . "</th>";
              $leerlingRow .= "<td>" . $as->datum . "</td>";
              $leerlingRow .= "<td>" . $as->lnaam . "</td>";
              $leerlingRow .= "<td>" . $as->opmerking . "</td>";
              $leerlingRow .= "<td><a class='btn btn-xs btn-info' href='/instructors/comment/?id=".$as->id."'>Comment</a></td>";
              $leerlingRow .= "</tr>";
            }

            // Send array of data with the view to leerling/index, include overview data (rows) in an array
            $userHTML = $leerlingRow;
            // Initiate companies/index view
              $this->view('/instructors/index', $indexData = [
          "rows" => $userHTML
        ]);
        }
        public function comment()
	{
		$data = $this->userModel->comment();
		$this->view('instructors/comment', $data); // This is original
	}
  public function update($id)
	{
		$datum  = $_POST['datum'];
		$leerling = $_POST['leerling'];
		$opmerking = $_POST['opmerking'];

		$this->userModel->update($id, $datum, $leerling, $opmerking);
		//Redirect to warehouseadmins view
		$this->redirect('instructors/index');
	}
        
  }