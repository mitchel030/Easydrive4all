<?php
class Locations extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Location');
  }

  public function index()
  {
    {   // Initiate viewLeerling function in models/location.php and put the result in $LocationIndexOverview
        $locationdata = $this->userModel->getData();
        // Declare locationRows variable as a string
        $locationRow = "";
        // For each row, write a HTML row with data
        foreach ($locationdata as $as) {
          $locationRow .= "<tr>";
          $locationRow .= "<td>" . $as->datumlessen . "</td>";
          $locationRow .= "<td>" . $as->student . "</td>";
          $locationRow .= "<td>" . $as->straat . "</td>";
          $locationRow .= "<td>" . $as->woonplaats . "</td>";
          $locationRow .= "<td>" . $as->naaminstructor . "</td>";
          $locationRow .= "</tr>";
        }

        // Send array of data with the view to instructor/index, include overview data (rows) in an array
        $userHTML = $locationRow;
        // Initiate companies/index view
          $this->view('/locations/index', $indexData = [
      "lessenrows" => $userHTML
    ]);
    }
  }

  public function change()
  {
    {   // Initiate viewLeerling function in models/locations.php and put the result in $locations
        $locationdata = $this->userModel->getData();
        // Declare locationRows variable as a string
        $locationRow = "";
        // For each row, write a HTML row with data
        foreach ($locationdata as $as) {
          $locationRow .= "<tr>";
          $locationRow .= "<td>" . $as->datumlessen . "</td>";
          $locationRow .= "<td>" . $as->student . "</td>";
          $locationRow .= "<td>" . $as->straat . "</td>";
          $locationRow .= "<td>" . $as->woonplaats . "</td>";
          $locationRow .= "<td>" . $as->naaminstructor . "</td>";
          $locationRow .= "<td><a class='btn btn-xs btn-info' href='/locations/edit/?id=".$as->id."'>Edit</a></td>";
          $locationRow .= "</tr>";
        }

        // Send array of data with the view to locations/index, include overview data (rows) in an array
        $userHTML = $locationRow;
        // Initiate locations/index view
          $this->view('/locations/change', $indexData = [
      "locatierows" => $userHTML
    ]);
    }
  }
  public function edit()
	{
		$data = $this->userModel->edit();
		$this->view('locations/edit', $data);
	}
    public function update($id)
	{
		$datumlessen  = $_POST['datumlessen'];
		$student = $_POST['student'];
		$straat = $_POST['straat'];
		$woonplaats = $_POST['woonplaats'];
        $naaminstructor = $_POST['naaminstructor'];

		$this->userModel->update($id, $datumlessen, $student, $straat, $woonplaats, $naaminstructor);
		//Redirect to locations view
		$this->redirect('locations');
	}
}
